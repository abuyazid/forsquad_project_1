<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{

  //var $db_cpr;
  public function __construct(){
	 $this->load->database();
	}
	
	function f_login(){
		$sql = "SELECT * FROM artikel order by date_created desc limit 3";
		return $this->db->query($sql)->result_array();
	}
	
	function f_register($data){
	
		$data = array(
		   'nama' => $data['nama'],
		   'username' => $data['username'],
		   'password' => $data['password'],
		   'email' => $data['email'],
		   'phone' => $data['phone'],
		   'alamat' => $data['alamat'],
		   'data_created' => 'now()'
		);
		$this->db->insert('user', $data);
		
	}

}
?>