<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pertama extends CI_Model{
	
	function getdata(){
		return $this->db->get('datatoko')->result();
	}

	function ambilData(){
		return $this->db->query('select * from datatooko');

	}
	
}