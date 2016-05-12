<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->model('user_model');
			$this->load->model('home_model');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('security');
		}
	public function index()
	{
		
		$this->form_validation->set_rules('username1', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password1', 'password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$data['v_title']= "home";
				$data['content_terbanyak']= $this->home_model->f_content();
				$data['content_anime']= $this->home_model->f_content_anime();
				$data['content_game']= $this->home_model->f_content_game();
				$v_cont['content'] = $this->load->view('home_view', $data, true);
				$this->load->view('index_view',$v_cont);
			}else{
				$data['v_title']= "login";
				$v_cont['content'] = $this->load->view('login_view',$data,true);
				$this->load->view('index_view',$v_cont);
			}
		} else {
			$data = array(
				'username' => $this->input->post('username1'),
				'password' => $this->input->post('password1')
			);
			$result=$this->user_model->f_login($data);
			
			if ($result != false) {
				$session_data = array(
					'username' => $result[0]->USERNAME,
					'email' => $result[0]->EMAIL,
				);
				$this->session->set_userdata('logged_in', $session_data);
				$data['v_title']= "home";
				$data['content_terbanyak']= $this->home_model->f_content();
				$data['content_anime']= $this->home_model->f_content_anime();
				$data['content_game']= $this->home_model->f_content_game();
				$v_cont['content'] = $this->load->view('home_view', $data, true);
				$this->load->view('index_view',$v_cont);
			} else {
				$data = array(
					'error_message' => 'Invalid Username or Password'
				);
				$data['v_title']= "login";
				$v_cont['content'] = $this->load->view('login_view',$data,true);
				$this->load->view('index_view',$v_cont);
			}
		}
	}
}
