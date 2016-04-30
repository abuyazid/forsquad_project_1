<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model{

  //var $db_cpr;
  public function __construct(){
	 $this->load->database();
	}
	
	function f_content(){
		$sql = "SELECT * FROM artikel order by date_created desc limit 3";
		return $this->db->query($sql)->result_array();
	}
	
	function f_content_anime(){
		$sql = "SELECT * FROM artikel where id_kategori=1 order by date_created desc limit 3";
		return $this->db->query($sql)->result_array();
	}
	
	function f_content_event(){
		$sql = "SELECT * FROM artikel where id_kategori=3 order by date_created desc limit 3";
		return $this->db->query($sql)->result_array();
	}
	
	function f_content_game(){
		$sql = "SELECT * FROM artikel where id_kategori=2 order by date_created desc limit 3";
		return $this->db->query($sql)->result_array();
	}
}
?>