<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fruta_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('fruta_model');
	}
	public function index(){
		$data = array('title' => 'Fruta || Fruta');
		$this->load->view('template/header',$data);
		$this->load->view('fruta_view');
		$this->load->view('template/footer');
	}
}