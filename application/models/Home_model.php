<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model{

  //var $db_cpr;
  public function __construct(){
	 $this->load->database();
	}
/*
	function f_content()
		{	
			$query =  $this->db->get('artikel')->row_array();
			return $query;
		}
*/		
	function f_content(){
		$sql = "SELECT * FROM artikel order by date_created desc limit 3";
		return $this->db->query($sql)->result_array();
	}
	/*
	function f_select1()
		{	
			$query =  $this->db->get('CUSTOMER')->result_array();
			return $query;
		}
		
	function f_select2()
		{	
			//$query =  $this->db->get('CASE_COMPANY')->result_array();
			//return $query;
			$this->db->select('CASE_COMPANY.ID,CASE_COMPANY.ID_COMPANY, CASE_COMPANY.ID_CASE,CASE_COMPANY.NAME, CUSTOMER.CUSTOMER_NAME, CASE.TITLE ');
			$this->db->from('CASE_COMPANY');
			$this->db->join('CUSTOMER', 'CASE_COMPANY.ID_COMPANY = CUSTOMER.ID',  'left');
			$this->db->join('CASE', 'CASE_COMPANY.ID_CASE = CASE.ID',  'left');
			$query = $this->db->get()->result_array();
			return $query;
		}
		
	function f_select3($id_cc)
		{	
			$this->db->select('CASE_COMPANY.ID,CASE_COMPANY.ID_COMPANY, CASE_COMPANY.ID_CASE,CASE_COMPANY.NAME, CUSTOMER.CUSTOMER_NAME, CASE.TITLE ');
			$this->db->from('CASE_COMPANY');
			$this->db->join('CUSTOMER', 'CASE_COMPANY.ID_COMPANY = CUSTOMER.ID',  'left');
			$this->db->join('CASE', 'CASE_COMPANY.ID_CASE = CASE.ID',  'left');
			$this->db->where('CASE_COMPANY.ID', $id_cc);
			$query = $this->db->get()->row_array();
			return $query;
			//return $this->db->where('ID', $id_cc)->get('CASE_COMPANY')->row_array();
		}
	
	function f_add(){
		//die(var_dump( $this->input->post('p_name')));
		$this->db->set('NAME', $this->input->post('p_name'));
		$this->db->set('ID_CASE', $this->input->post('p_case'));
		$this->db->set('ID_COMPANY', $this->input->post('p_company'));
		
		
		return $this->db->insert('CASE_COMPANY');
	}
	
	function f_update(){
		//die(var_dump( $this->input->post('p_id')));
		$this->db->set('NAME', $this->input->post('p_name'));
		$this->db->set('ID_CASE', $this->input->post('p_case'));
		$this->db->set('ID_COMPANY', $this->input->post('p_company'));
		
		return $this->db->where('ID', $this->input->post('p_id'))->update('CASE_COMPANY');
	}
	
	function f_delete($id_cc){
		
		//die(var_dump($id_cc));
		return $this->db->where('ID',$id_cc)->delete('CASE_COMPANY');
	}

  public function getLastFourPost(){
    $query =  $this->db->get('POSTS')->result_array();
    //var_dump($query);
    return $query;
  }
  */
}
?>