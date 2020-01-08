<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sabor_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('sabor_model');
	}

	public function index(){
		$data = array('title' => 'Fruta || Sabor',
			'sabor' => $this->sabor_model->get_sabor());
		$this->load->view('template/header',$data);
		$this->load->view('sabor_view');
		$this->load->view('template/footer');
	}

	public function guardar(){
		$c = $this->input->post('sabor');
		$da = $this->sabor_model->guardar($c);
		if ($da == 'add') {
			echo "<script>alert('se guardo exitosamente')</script>";
		}else{
			echo "<script>alert('Error al guardar')</script>";
		}
		redirect('sabor_controller/index','refresh');
	}

	public function eliminar($id){
		$da = $this->sabor_model->eliminar($id);
		if ($da == 'eli') {
			echo "<script>alert('Eliminado exitosamente')</script>";
		}else{
			echo "<script>alert('Error al Eliminar')</script>";
		}
		redirect('sabor_controller/index','refresh');
	}

	public function get_datos($id){
		$data = array('title' => 'Fruta || Sabor',
			'sabor' => $this->sabor_model->get_sabor(),
			'datos' => $this->sabor_model->get_datos($id));
		$this->load->view('template/header',$data);
		$this->load->view('sabor_view_act');
		$this->load->view('template/footer');
	}

	public function actualizar(){
		$datos['id'] = $this->input->post('id');
		$datos['sabor'] = $this->input->post('sabor');
		$da = $this->sabor_model->actualizar($datos);
		if ($da == 'edi') {
			echo "<script>alert('se actualizo exitosamente')</script>";
		}else{
			echo "<script>alert('Error al actualizar')</script>";
		}
		redirect('sabor_controller/index','refresh');
	}
}
