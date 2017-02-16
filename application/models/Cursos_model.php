<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
    function crearCurso($data){
		$this->db->insert('Cursos', array('cursos_nombre'=>$data['nombrec'], 'cursos_videos'=>$data['videosc']));
	}

    function obtenerCursos(){
	 	$consulta = $this->db->get('Cursos');
        if($consulta->num_rows() > 0) return $consulta;
        else return false;
    }

}
?>