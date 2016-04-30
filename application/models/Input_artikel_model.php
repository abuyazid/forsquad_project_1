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
	
}
?>