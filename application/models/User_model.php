<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{

  //var $db_cpr;
  public function __construct(){
	 $this->load->database();
	}
	
	function f_login($data){
		$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
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
		$query=$this->db->insert('user', $data);
		echo $query;
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

}
?>