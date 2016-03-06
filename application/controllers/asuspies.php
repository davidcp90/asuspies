<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asuspies extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('pagination');
		$this->load->model('Asuspies_model');
	}

	public function _example_output($output = null)
	{
		$this->load->view('asuspies/crud.php',$output);
	}
	function index(){
		$this->load->view('asuspies/meuno');
	}
	function lista(){
		$this->load->view('asuspies/lista');
	}
	function getPeople(){
		return $this->output->set_content_type('application/json')->set_output(json_encode($this->Asuspies_model->get_members()));
	}
	function estoy_asuspies()
	{
		$config['upload_path'] = './uploads/jovenes/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '5000';
		$config['max_width']  = '5000';
		$config['max_height']  = '5000';
		$this->load->library('upload', $config);
		$data = array(
			'name' => $this->input->post('name'),
			'genre' => $this->input->post('genre'),
			'birthdate' => $this->input->post('birthdate'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'celular' => $this->input->post('celular'),
			'career' => $this->input->post('career'),
			'education' => $this->input->post('education'),
			'skills' => $this->input->post('skills'),
			'hobbies' => $this->input->post('hobbies'),
			'known_gifts' => $this->input->post('known_gifts'),
			'gifts' => $this->input->post('gifts'),
			'has_mentor' => $this->input->post('has_mentor'),
			'mentor' => $this->input->post('mentor'),
			'first_committee' => $this->input->post('first_committee'),
			'second_committee' => $this->input->post('second_committee'),
		);
		if ($this->upload->do_upload()){
			$up_result=$this->upload->data();
			$data['photo']=$up_result['file_name'];	
		}
		if($this->db->insert('members', $data)){
			$genre=$this->input->post('genre');
			if($genre = 1){
				$pavista['mensaje']=' un gran producto';
			}
			else{
				$pavista['mensaje']=' una nota';
			}
			$pavista['nombre']=strtok($data['name']," ");
			$this->load->view('asuspies/success',$pavista);
		}

	}
	function edicion(){
		$bool_array=array('1' => 'Si', '2' => 'No');
		$commitees=array('1' => 'Alabanza', '2' => 'Pastoreo y Discipulado','3' => 'Evangelismo','4' => 'Enseñanza',
			'5'=>'Oración','6'=>'Logística','7'=>'Actividades',
			'8'=>'Arte y Comunicaciones');
		try{
			$crud = new grocery_CRUD();
			$crud->set_table('members');
			$crud->set_theme('bootstrap');
			$crud->set_language("spanish");
			$crud->set_subject('Miembro');
			$crud->columns('name','genre','photo');
			$crud->field_type('genre','dropdown',
            				array('1' => 'Hombre', '2' => 'Mujer'));
			$crud->display_as('name','Nombre')->display_as('genre','Genero')->display_as('birthdate','Fecha de Nacimiento')->display_as('phone','Telefono')->display_as('photo','Foto')->display_as('career','Ocupacion')->display_as('education','Nivel Academico')->display_as('skills','Habilidades / Talentos')->display_as('hobbies','Hobbies')->display_as('known_gifts','¿Conoces tus Dones?')->display_as('has_mentor','¿Alguien te esta discipulando?')->display_as('mentor','Discipulador')->display_as('genre','Genero')->display_as('first_committee','1 Comite')->display_as('second_committee','2 Comite')->display_as('gifts','Dones');
			$crud->field_type('has_mentor','dropdown',$bool_array);
			$crud->field_type('known_gifts','dropdown',$bool_array);
			$crud->field_type('education','dropdown',array('1'=>'Bachillerato','2'=>'Universidad','3'=>'Profesional'));
			$crud->field_type('first_committee','dropdown',$commitees);
			$crud->field_type('second_committee','dropdown',$commitees);
			$crud->set_field_upload('photo','uploads/jovenes');
			$crud->unset_export();
			 $crud->unset_texteditor('skills','gifts','hobbies');
			$crud->unset_print();
			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}



}
