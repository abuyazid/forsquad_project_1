<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_Artikel extends CI_Controller {
	
	function __construct()
		{
			parent::__construct();
			$this->load->model('input_artikel_model');
			$this->load->helper('form');
		    $this->load->helper('url');

		}
	
	public function index()
	{
		$data['v_title']= "Artikel";
		$data['kategori']= $this->input_artikel_model->f_kategori();
		//die(var_dump($data['kategori']));
		$v_cont['content'] = $this->load->view('input_artikel_view', $data, true);
		$this->load->view('index_view',$v_cont);
	}
}
