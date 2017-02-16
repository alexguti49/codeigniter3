<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {

    function __construct(){
        parent::__construct(); 
        $this->load->helper('form');
        $this->load->model('cursos_model');
    }
	
    function index(){
		$this->load->view('header');
        $data['cursos'] = $this->cursos_model->obtenerCursos();
        $this->load->view('cursos/cursos',$data);
	}

    function nuevo(){
		$this->load->view('header');
        $this->load->view('cursos/formulario');
	}

    function recibirDatos(){
        $data = array(
            'nombrec' => $this->input->post('nombre'),
            'videosc' => $this->input->post('videos')
        );
        $this->cursos_model->crearCurso($data);
        $this->load->view('header');
        $this->load->view('cursos/formulario');
        
	}
}
?>