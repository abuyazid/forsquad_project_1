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
	
	public function create()
	{
		ini_set('post_max_size', '100M');
		ini_set('upload_max_filesize', '100M');
		//file upload destination
		$dir_path = './img_content/';
        $config['upload_path'] = $dir_path;
        $config['allowed_types'] = '*';
		//$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|xls|xlsx';
        $config['max_size'] = '0';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
		$this->load->library('upload');
        $this->upload->initialize($config);

        //upload file
        $i = 0;
        $files = array();
        $is_file_error = FALSE;
            
        foreach ($_FILES as $key => $value) {
            if (!empty($value['name'])) {
              
                if (!$this->upload->do_upload($key)) {
                    $this->handle_error($this->upload->display_errors());
                    $is_file_error = TRUE;
                } else {
                    $files[$key] = $this->upload->data();
                    ++$i;
                }
            }
        }

            
        // There were errors, we have to delete the uploaded files
        if ($is_file_error && $files) {
            for ($i = 0; $i < count($files); $i++) {
                $file = $dir_path . $files[$i]['file_name'];
                if (file_exists($file)) {
                    unlink($file);
                }
            }
        }
		
		$v_success = $this->input_artikel_model->f_create($files);

		redirect('Input_Artikel/index');
		
	}
}
