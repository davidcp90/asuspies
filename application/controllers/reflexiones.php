<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reflexiones extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->model('Reflexiones_model');
		$this->load->helper('url');
		$this->load->helper('ag_auth');
		$this->load->library('grocery_CRUD');
		$this->load->library('ag_auth');
		$this->load->library('pagination');
	}

		function index()
			{
				$data['title']="Reflexiones";
				$config = array();
	        $config["base_url"] = site_url('reflexiones/index');
	        $config["total_rows"] = $this->Reflexiones_model->contar_registros();
	        $config["per_page"] = 5;
	        $config["uri_segment"] = 3;
	        $this->pagination->initialize($config);
	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	        $data["reflexiones"] = $this->Reflexiones_model->get_reflexiones($config["per_page"], $page);
	        $data["categorias"] = $this->Reflexiones_model->get_categorias();
	        $data["links"] = $this->pagination->create_links();
	        $data["catact"] = 0;
			$this->load->view('front_templates/header', $data);
			$this->load->view('reflexiones',$data);
			$this->load->view('front_templates/footer', $data);

			}

		function gestioncat(){
			if(logged_in()){
			$crud = new grocery_CRUD();
		$data['title']="Categorias de reflexiones";
		$data['imagen']="reflexionescat.png";
		$crud->set_subject('categoria');
		$crud->set_table('categoriaReflexiones');
		$crud->columns('nombre','descripcion');
		 $crud->unset_export();
		  $crud->unset_print();
		
        $output = $crud->render();
 	
       $this->_example_output($output,$data);
       }
       else{
       	 $data['title']="Area de Hermanos";
			 $data['errorl']=FALSE;
       $this->ag_auth->view('login',$data);
		}}
		function gestion(){
			if(logged_in()){
			$crud = new grocery_CRUD();
			
			$crud->set_language("spanish");
		$data['title']="Reflexiones";
		$data['imagen']="reflexiones.png";
		$crud->set_subject('Reflexion');
		$crud->set_table('reflexiones');
		$crud->columns('titulo','id_categoriaReflexiones','id_usuario','fecha');
		$crud->display_as('id_usuario','Autor');
        $crud->display_as('id_categoriaReflexiones','Categoria');
        $crud->required_fields('id_categoriaPredicas','nombre','fecha');
        $crud->set_relation('id_categoriaReflexiones','categoriaReflexiones','nombre');
        // $crud->set_relation('id_usuario','users','username');
         $crud->set_field_upload('imagen','assets/uploads/imagen');
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
		function post($id)
			{
				$data['title']=$this->Reflexiones_model->name_post($id);
			  
	        $data["post"] = $this->Reflexiones_model->get_post($id);
	        $data["categorias"] = $this->Reflexiones_model->get_categorias();
	        
	        
			$this->load->view('front_templates/header', $data);
			$this->load->view('reflexion_post',$data);
				$this->load->view('front_templates/footer', $data);

			}
		function categoria($cat)
			{
				$data['title']="Reflexiones";
			/*$config = array();
	       $config["base_url"] = site_url('predicas/categoria');
	        $config["total_rows"] = $this->Predicas_model->contar_registros();
	        $config["per_page"] = 5;
	        $config["uri_segment"] = 3;
	        

	        $this->pagination->initialize($config);

	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;*/
	        $limit=20;
	        $start=1;
	        $data["reflexiones"] = $this->Reflexiones_model->get_reflexiones_cat($limit, $start,$cat);
	        $data["categorias"] = $this->Reflexiones_model->get_categorias();
	        $data["links"] = $this->pagination->create_links();
	        
				$this->load->view('front_templates/header', $data);
				$this->load->view('reflexiones',$data);
				$this->load->view('front_templates/footer', $data);

			}	
			function _example_output($output= null,$data)
 
    {
    	
    	$this->load->view('back_templates/cabecera');
    	$this->load->view('back_templates/headcontent',$data);
        $this->load->view('back_templates/formcontent',$output);
         $this->load->view('back_templates/cola',$output); 
    }

		}
	