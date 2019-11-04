<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_pertama');
			
	}
	
	function index(){
		$data = $this->model_pertama->getdata();
		$var_kirim =([
			'data_toko_kirim' => $data
		]);
		//templating
		$this->load->view('header');
		$this->load->view('v_model',$var_kirim);
		$this->load->view('footer');
	}
}
