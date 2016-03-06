<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->model('Eventos_model');
		$this->load->helper('url');
		$this->load->helper('ag_auth');
		$this->load->library('grocery_CRUD');
		$this->load->library('ag_auth');
		$this->load->library('pagination');
	}

	function index()
	{
		$data['title']="Eventos";
		$config = array();
		$config["base_url"] = site_url('eventos/index');
		$config["total_rows"] = $this->Eventos_model->contar_registros();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["eventos"] = $this->Eventos_model->get_eventos($config["per_page"], $page);
		$data["categorias"] = $this->Eventos_model->get_categorias();
		$data["links"] = $this->pagination->create_links();
		$data["catact"] = 0;
		$this->load->view('front_templates/header', $data);
		$this->load->view('eventos',$data);
		$this->load->view('front_templates/footer', $data);

	}
	function info($id)
	{
		$data['title']=$this->Eventos_model->name_post($id);

		$data["info"] = $this->Eventos_model->get_post($id);
		$data["fotos"] = $this->Eventos_model->get_fotos($id);
		


		$this->load->view('front_templates/header', $data);
		$this->load->view('infoevento',$data);
		$this->load->view('front_templates/footer', $data);

	}
	function gestioncat(){
		$crud = new grocery_CRUD();
		$crud->set_table('categoriaEventos');

		$data['title']="Categoria de Eventos";
		$data['imagen']="eventos.png";
		$output = $crud->render();

		$this->_example_output($output,$data);

	}

	function gestion(){
		if(logged_in()){
			$crud = new grocery_CRUD();
			$crud->set_table('eventos');$crud->set_language("spanish");$crud->set_subject('Evento');
			$data['title']="Eventos";
			$data['imagen']="eventos.png";
			$crud->unset_edit_fields('id_categoriaEventos');
			$crud->unset_add_fields('id_categoriaEventos');
			$crud->unset_texteditor('codigo_mapa');
			$crud->columns('nombre','fecha','lugar','destacado');
			$crud->set_field_upload('imagen_destacada','assets/uploads/imagen');
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

		function gestiongal(){
			if(logged_in()){
				$crud = new grocery_CRUD();

				$crud->set_language("spanish");
				$data['title']="Galeria";
				$data['imagen']="reflexiones.png";
				$crud->set_subject('Imagen');
				$crud->set_table('galeriaEventos');
				$crud->columns('nombre','imagen');
				$crud->required_fields('id_evento','nombre','imagen');
				$crud->set_relation('id_evento','eventos','nombre');

				$crud->display_as('id_evento','evento');
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

			function _example_output($output= null,$data)

			{

				$this->load->view('back_templates/cabecera');
				$this->load->view('back_templates/headcontent',$data);
				$this->load->view('back_templates/formcontent',$output);
				$this->load->view('back_templates/cola',$output); 
			}
		}
