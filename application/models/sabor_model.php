<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sabor_model extends CI_Model {

	public function get_sabor(){
		$exe = $this->db->get('sabor');
		return $exe->result();
	}

	public function get_datos($id){
		$this->db->where('id_sabor',$id);
		$exe = $this->db->get('sabor');
		return $exe->result();
	}

	public function eliminar($id){
		$this->db->where('id_sabor',$id);
		$this->db->delete('sabor');
		if ($this->db->affected_rows() > 0) {
			return 'eli';
		}else{
			return false;
		}
	}

	public function guardar($c){
		$this->db->set('nombre_sabor',$c);
		$this->db->insert('sabor');
		if ($this->db->affected_rows() > 0) {
			return 'add';
		}else{
			return false;
		}
	}

	public function actualizar($datos){
		$this->db->where('id_sabor',$datos['id']);
		$this->db->set('nombre_sabor',$datos['sabor']);
		$this->db->update('sabor');
		if ($this->db->affected_rows() > 0) {
			return 'edi';
		}else{
			return false;
		}
	}
}
