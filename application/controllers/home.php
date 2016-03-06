<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->model('Predicas_model');
		$this->load->model('Reflexiones_model');
	}

		function index()
		{
			$data['title']="Bienvenidos a ";
			$this->load->helper(array('form'));
			$data["predicas"] = $this->Predicas_model->get_predicas(2, 0);
			$data["reflexiones"] = $this->Reflexiones_model->get_reflexiones(4, 0);
			$this->load->view('front_templates/header', $data);
			$this->load->model('Predicas_model');
			$this->load->view('index',$data);
			$this->load->view('front_templates/footer', $data);
		}	



		}
	