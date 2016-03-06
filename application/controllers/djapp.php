<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Djapp extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('pagination');
		$this->load->model('Djapp_model');
	}


	function index(){
		$data['boys']=$this->Djapp_model->get_boys();
		$data['girls']=$this->Djapp_model->get_girls();
		$this->load->view('djapp/index',$data);
	}
	function edicion(){
		$crud = new grocery_CRUD();
		$crud->set_table('dj_users');$crud->set_language("spanish");$crud->set_subject('Miembro');
		$crud->set_theme('datatables');
		$crud->set_relation('sex_id','dj_sex','genero');
		$crud->columns('nombres','apellidos');
		$crud->display_as('sex_id','Sexo');
		$crud->set_field_upload('foto','assets/uploads/imagen');
		$crud->unset_export();
		$crud->unset_print();
		$output = $crud->render();
		$this->load->view('djapp/crud',$output);
	}



}
