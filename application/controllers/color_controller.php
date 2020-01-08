<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class color_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('color_model');
	}

	public function index(){
		$data = array('title' => 'Fruta || Color',
			'color' => $this->color_model->get_color());
		$this->load->view('template/header',$data);
		$this->load->view('color_view');
		$this->load->view('template/footer');
	}

	public function guardar(){
		$c = $this->input->post('color');
		$da = $this->color_model->guardar($c);
		if ($da == 'add') {
			echo "<script>alert('se guardo exitosamente')</script>";
		}else{
			echo "<script>alert('Error al guardar')</script>";
		}
		redirect('color_controller/index','refresh');
	}

	public function eliminar($id){
		$da = $this->color_model->eliminar($id);
		if ($da == 'eli') {
			echo "<script>alert('Eliminado exitosamente')</script>";
		}else{
			echo "<script>alert('Error al Eliminar')</script>";
		}
		redirect('color_controller/index','refresh');
	}

	public function get_datos($id){
		$data = array('title' => 'Fruta || Color',
			'color' => $this->color_model->get_color(),
			'datos' => $this->color_model->get_datos($id));
		$this->load->view('template/header',$data);
		$this->load->view('color_view_act');
		$this->load->view('template/footer');
	}

	public function actualizar(){
		$datos['id'] = $this->input->post('id');
		$datos['color'] = $this->input->post('color');
		$da = $this->color_model->actualizar($datos);
		if ($da == 'edi') {
			echo "<script>alert('se actualizo exitosamente')</script>";
		}else{
			echo "<script>alert('Error al actualizar')</script>";
		}
		redirect('color_controller/index','refresh');
	}
}
