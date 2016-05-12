<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->model('user_model');
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('security');
		}
	public function index()
	{
		$data=$this->input->post(); 
		
		
		$this->form_validation->set_message('is_unique','%s is already registered');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('username', 'username', 'trim|required|alpha_numeric|min_length[3]|max_length[30]|is_unique[user.username]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]|xss_clean');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|md5|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|md5|xss_clean');
		
		
		$data['v_title']= "Register";
		if ($this->form_validation->run() == FALSE) {   
            
			$v_cont['content'] = $this->load->view('login_view',$data,true);
			$this->load->view('index_view',$v_cont);
        }else{                
			$result =$this->user_model->f_register($data);
			if ($result == TRUE) {
				$data['message_display'] = 'Registration Completed !';
				$v_cont['content'] = $this->load->view('login_view',$data,true);
				$this->load->view('index_view',$v_cont);
			} else {
				$data['message_display'] = 'Registration Error!!';
				$v_cont['content'] = $this->load->view('login_view',$data,true);
				$this->load->view('index_view',$v_cont);
			}
        }
	}

}
