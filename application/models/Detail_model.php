<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail_model extends CI_Model{

  //var $db_cpr;
  public function __construct(){
	 $this->load->database();
	}
	
	function f_get_artikel($id_artikel){
		$sql = "SELECT artikel. * , kategori.nama as NAMA_KATEGORI
			FROM artikel
			INNER JOIN kategori ON artikel.ID_KATEGORI = kategori.ID_KATEGORI
			WHERE ID_ARTIKEL = $id_artikel";
		return $this->db->query($sql)->row_array();
	}
	
}
?>