<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	
	function __construct()
		{
			parent::__construct();
			//$this->load->model('case_company_model');
			$this->load->helper('form');
		    $this->load->helper('url');

		}
	
	public function index()
	{
		$data['v_title']= "kategori";
		//$data['v_select']= $this->case_company_model->f_select();
		$v_cont['content'] = $this->load->view('kategori_view', $data, true);
		$this->load->view('index_view',$v_cont);
	}
}
