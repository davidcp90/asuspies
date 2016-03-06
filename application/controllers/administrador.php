<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Administrador extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
  $data['title']="Area de Hermanos";
  $data['css_files']=null;
  $data['js_files']=null;
     $this->load->view('back_templates/cabecera', $data);
     $this->load->view('panel');
     $this->load->view('back_templates/cola', $data);   
 

 }


}
?>