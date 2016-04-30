<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Input_artikel_model extends CI_Model{

  //var $db_cpr;
  public function __construct(){
	 $this->load->database();
	}
	
	function f_kategori(){
		$sql = "SELECT * FROM kategori order by NAMA ASC";
		return $this->db->query($sql)->result_array();
	}
	function f_create($files){
		$v_path_file_1 = !empty($files['p_doc_file_1'])?$files['p_doc_file_1']['file_name']:'';
		//die(var_dump($v_path_file_1));
		$this->db->set('FILE', $v_path_file_1);
		$this->db->set('JUDUL', $this->input->post('p_judul'));
		$this->db->set('META_TAG', $this->input->post('p_meta_tag'));
		$this->db->set('META_DESC', $this->input->post('p_meta_desc'));
		$this->db->set('META_KEYWORD', $this->input->post('p_meta_keyword'));
		$this->db->set('ID_KATEGORI', $this->input->post('p_kategori'));
		$this->db->set('ISI', $this->input->post('p_isi'));
		$this->db->set('CREATED_BY', 'yazid');
		$this->db->set('DATE_CREATED', date('Y-m-d'));
		$this->db->insert('artikel');
	}
}
?>