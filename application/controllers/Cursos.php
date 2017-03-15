<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('cursos_model');
	}

	function index(){
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('header');
		$this->load->view('footer');
		if(!$data['segmento']){
			$data['cursos'] = $this->cursos_model->obtenerCursos();
		}
		else{
			$data['cursos'] = $this->cursos_model->obtenerCurso($data['segmento']);
		}
		$this->load->view('cursos/cursos',$data);
	}

	function nuevo(){
		$this->load->view('header');
		$this->load->view('cursos/formulario');
		$this->load->view('footer');
	}

	function recibirDatos(){
		$data = array(
			'nombrec' => $this->input->post('nombre'),
			'videosc' => $this->input->post('videos')
		);
		$this->cursos_model->crearCurso($data);
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('cursos/formulario');
	}

	function editar(){
		$this->load->view('header');
		$this->load->view('footer');
		$data['id'] = $this->uri->segment(3);
		$data['curso'] = $this->cursos_model->obtenerCurso($data['id']);
		$this->load->view('cursos/editar', $data);
	}

	function actualizar(){
		$this->load->view('header');
		$this->load->view('footer');
		$data = array(
			'nombrec' => $this->input->post('nombre'),
			'videosc' => $this->input->post('videos')
		);
		$this->cursos_model->actualizarCurso($this->uri->segment(3),$data);
		$data['id'] = $this->uri->segment(3);
		$data['curso'] = $this->cursos_model->obtenerCurso($data['id']);
		$this->load->view('cursos/editar', $data);
		header("location:../index");
	}

// 	function index(){
//	$this->load->view('header');
//	$this->load->view('footer');
//	$data['cursos'] = $this->cursos_model->obtenerCursos();
//  $this->load->view('cursos/cursos',$data);
//	}
}
?>
