<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nosotros extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
	$this->load->database();

		$this->load->helper('url');
		$this->load->helper('ag_auth');
		$this->load->library('grocery_CRUD');
		$this->load->library('ag_auth');	
	}

		function index()
		{
			$data['title']="Sobre Nosotros";
			$this->load->helper(array('form'));
			$this->load->view('front_templates/header', $data);
			$this->load->view('nosotros',$data);
			$this->load->view('front_templates/footer', $data);
		}	
		function gestion(){
			if(logged_in()){
			$crud = new grocery_CRUD();
    $crud->set_table('nosotros');$crud->set_language("spanish");$crud->set_subject('nosotros');
   $data['title']="Sobre Nosotros";
		$data['imagen']="nosotros.png";
		 $crud->unset_back_to_list();
		 $crud->unset_export();
		  $crud->unset_print();
    $output = $crud->render();
 
    $this->_example_output($output,$data);
    	}
    	else{
        	 $data['title']="Area de Hermanos";
			 $data['errorl']=FALSE;
      $this->ag_auth->view('login',$data); }

		
		}

		function _example_output($output= null,$data)
 
    {
    	
    	$this->load->view('back_templates/cabecera');
    	$this->load->view('back_templates/headcontent',$data);
        $this->load->view('back_templates/formcontent',$output);
         $this->load->view('back_templates/cola',$output); 
    }


		}
	