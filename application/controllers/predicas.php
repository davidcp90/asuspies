	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Predicas extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			
			$this->load->database();
	$this->load->helper('ag_auth');
			$this->load->helper('url');
			$this->load->library('ag_auth');
			$this->load->model('Predicas_model');
			$this->load->library('grocery_CRUD');	
			$this->load->library('pagination');


		}

			function index()
			{
				$data['title']="Predicas";
				$config = array();
	        $config["base_url"] = site_url('predicas/index');
	        $config["total_rows"] = $this->Predicas_model->contar_registros();
	        $config["per_page"] = 5;
	        $config["uri_segment"] = 3;
	        $this->pagination->initialize($config);
	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	        $data["predicas"] = $this->Predicas_model->get_predicas($config["per_page"], $page);
	        $data["categorias"] = $this->Predicas_model->get_categorias();
	        $data["links"] = $this->pagination->create_links();
	        $data["catact"] = 0;
				$data["categoria_art"] = 0;
			$this->load->view('front_templates/header', $data);
			$this->load->view('predicas',$data);
				$this->load->view('front_templates/footer', $data);
		
			}
			function post($id)
			{
				$data['title']=$this->Predicas_model->name_post($id);
			  
	        $data["post"] = $this->Predicas_model->get_post($id);
	        $data["categorias"] = $this->Predicas_model->get_categorias();
	        
	        
			$this->load->view('front_templates/header', $data);
			$this->load->view('post_predicas',$data);
				$this->load->view('front_templates/footer', $data);

			}
			function categoria($cat)
			{
				$data['title']="Predicas";
			/*$config = array();
	       $config["base_url"] = site_url('predicas/categoria');
	        $config["total_rows"] = $this->Predicas_model->contar_registros();
	        $config["per_page"] = 5;
	        $config["uri_segment"] = 3;
	        

	        $this->pagination->initialize($config);

	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;*/
	        $limit=20;
	        $start=0;
	        $data["predicas"] = $this->Predicas_model->get_predicas_cat($limit, $start,$cat);
	        $data["categorias"] = $this->Predicas_model->get_categorias();
			$data["categoria_art"] = $this->Predicas_model->get_categ_name($cat);
			$numero = $this->Predicas_model->contar_registros();
			if($numero>20){
	        $data["links"] = $this->pagination->create_links();
			}
			else{
				$data["links"] = 0;
			}
				$this->load->view('front_templates/header', $data);
				$this->load->view('predicas',$data);
				$this->load->view('front_templates/footer', $data);

			}		

			function gestioncat(){
				if(logged_in()){
				$crud = new grocery_CRUD();
			$data['title']="Categorias de predicas";
			$data['imagen']="predicascat.png";
			$crud->set_subject('categoria');
			$crud->set_table('categoriaPredica');
			$crud->columns('nombre','descripcion');
			$crud->order_by('id_categoriaPredicas','desc');
			 $crud->unset_export();
			  $crud->unset_print();
			$crud->set_field_upload('imagen','assets/uploads/imagen');
	        $output = $crud->render();
	 	
	       $this->_example_output($output,$data);
	       }
	 else{
	 	 $data['title']="Area de Hermanos";
				 $data['errorl']=FALSE;
	      $this->ag_auth->view('login',$data); }

			}
			function gestion(){
				if(logged_in()){
				$crud = new grocery_CRUD();
			
				$crud->set_language("spanish");
			$data['title']="Predicas";
			$data['imagen']="predicas.png";
			$crud->set_subject('predica');
			$crud->set_table('predicas');
			$crud->order_by('id_predicas','desc');
			$crud->columns('nombre','id_categoriaPredicas','autor');
			
	        $crud->display_as('id_categoriaPredicas','Categoria');
	        $crud->required_fields('id_categoriaPredicas','nombre','fecha');
	        $crud->set_relation('id_categoriaPredicas','categoriaPredica','nombre');
	         
	         //$crud->set_relation('id_usuario','users','username');
	         $crud->set_field_upload('imagen','assets/uploads/imagen');
			// $crud->set_field_upload('audio_mp3','uploads/mp3');
			// $crud->set_field_upload('audio_ogg','uploads/ogg');
			 $crud->unset_export();
			  $crud->unset_print();
			
	        $output = $crud->render();
	 	
	       $this->_example_output($output,$data);
	       }
	        else{
	        	 $data['title']="Area de Hermanos";
				 $data['errorl']=FALSE;
	      $this->ag_auth->view('login',$data);}

			}
			function _example_output($output= null,$data)
	 
	    {
	    	
	    	$this->load->view('back_templates/cabecera', $output);
	    	$this->load->view('back_templates/headcontent',$data);
	        $this->load->view('back_templates/formcontent',$output);
	         $this->load->view('back_templates/cola',$output); 
	    }

			}
		