<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class color_model extends CI_Model {

	public function get_color(){
		$exe = $this->db->get('color');
		return $exe->result();
	}

	public function get_datos($id){
		$this->db->where('id_color',$id);
		$exe = $this->db->get('color');
		return $exe->result();
	}

	public function eliminar($id){
		$this->db->where('id_color',$id);
		$this->db->delete('color');
		if ($this->db->affected_rows() > 0) {
			return 'eli';
		}else{
			return false;
		}
	}

	public function guardar($c){
		$this->db->set('nombre_color',$c);
		$this->db->insert('color');
		if ($this->db->affected_rows() > 0) {
			return 'add';
		}else{
			return false;
		}
	}

	public function actualizar($datos){
		$this->db->where('id_color',$datos['id']);
		$this->db->set('nombre_color',$datos['color']);
		$this->db->update('color');
		if ($this->db->affected_rows() > 0) {
			return 'edi';
		}else{
			return false;
		}
	}
}
