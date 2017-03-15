<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
    function crearCurso($data){
        $datos = array(
            'cursos_nombre'=>$data['nombrec'], 
            'cursos_videos'=>$data['videosc']
        );
		$this->db->insert('Cursos', $datos);
	}

     function actualizarCurso($id, $data){
        $datos = array(
            'cursos_nombre'=>$data['nombrec'], 
            'cursos_videos'=>$data['videosc']
        );
        $this->db->where('cursos_id',$id);
	 	$consulta = $this->db->update('Cursos',$datos);
    }

    function obtenerCursos(){
	 	$consulta = $this->db->get('Cursos');
        if($consulta->num_rows() > 0) return $consulta;
        else return false;
    }

     function obtenerCurso($id){
        $this->db->where('cursos_id',$id);
	 	$consulta = $this->db->get('Cursos');
        if($consulta->num_rows() > 0) return $consulta;
        else return false;
    }

}
?>