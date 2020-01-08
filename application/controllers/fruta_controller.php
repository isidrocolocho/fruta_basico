<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fruta_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('fruta_model');
	}
	public function index(){
		$data = array('title' => 'Fruta || Fruta',
			'fruta' => $this->fruta_model->get_frutas(),
			'sabor' => $this->fruta_model->get_sabor(),
			'color' => $this->fruta_model->get_color());
		$this->load->view('template/header',$data);
		$this->load->view('fruta_view');
		$this->load->view('template/footer');
	}

	public function guardar(){
		$datos['fruta'] = $this->input->post('fruta');
		$datos['color'] = $this->input->post('color');
		$datos['sabor'] = $this->input->post('sabor');
		$da = $this->fruta_model->guardar($datos);
		if ($da=='add') {
			echo "<script>alert('se guardo exitosamente');</script>";
		}else{
			echo "<script>alert('Error al guardar');</script>";
		}
		redirect('fruta_controller/index','refresh');
	}

	public function eliminar($id){
		$da = $this->fruta_model->eliminar($id);
		if ($da=='eli') {
			echo "<script>alert('Eliminado exitosamente');</script>";
		}else{
			echo "<script>alert('Error al Eliminar');</script>";
		}
		redirect('fruta_controller/index','refresh');
	}
	
	public function get_datos($id){
		$data = array('title' => 'Fruta || Fruta',
			'fruta' => $this->fruta_model->get_frutas(),
			'sabor' => $this->fruta_model->get_sabor(),
			'color' => $this->fruta_model->get_color(),
			'datos' => $this->fruta_model->get_datos($id)
		);
		$this->load->view('template/header',$data);
		$this->load->view('fruta_view_act');
		$this->load->view('template/footer');
	}	

	public function actualizar(){
		$datos['id'] = $this->input->post('id');
		$datos['fruta'] = $this->input->post('fruta');
		$datos['color'] = $this->input->post('color');
		$datos['sabor'] = $this->input->post('sabor');
		$da = $this->fruta_model->actualizar($datos);
		if ($da=='edi') {
			echo "<script>alert('Se Actualizo Exitosamente');</script>";
		}else{
			echo "<script>alert('Error al Actualizar');</script>";
		}
		redirect('fruta_controller/index','refresh');
	}
}