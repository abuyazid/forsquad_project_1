<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
	
	function __construct()
		{
			parent::__construct();
			$this->load->model('detail_model');
			$this->load->helper('form');
		    $this->load->helper('url');

		}
	
	public function index($id_artikel)
	{
		$data['v_title']= "detail";
		$data['detail_artikel']= $this->detail_model->f_get_artikel($id_artikel);
		$v_cont['content'] = $this->load->view('detail_view', $data, true);
		$this->load->view('index_view',$v_cont);
	}
}
