<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
		{
			parent::__construct();
			$this->load->model('home_model');
			$this->load->helper('form');
		    $this->load->helper('url');

		}
	
	public function index()
	{
		$data['v_title']= "home";
		$data['content_terbanyak']= $this->home_model->f_content();
		$data['content_anime']= $this->home_model->f_content_anime();
		$data['content_game']= $this->home_model->f_content_game();
		$data['content_event']= $this->home_model->f_content_event();
		//die(var_dump($data['content_anime']));
		$v_cont['content'] = $this->load->view('home_view', $data, true);
		$this->load->view('index_view',$v_cont);
	}
}
