<?php if (!defined('BASEPATH'))exit('No direct script access allowed');
class Loginold extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->load->helper(array('form'));
   $data['title']="Iniciar Sesion - Area de Hermanos";
   $data['errorl']=0;
   $this->load->view('back_templates/login_view',$data);
 }
 function fail()
 {
   $this->load->helper(array('form'));
   $data['title']="Iniciar Sesion - Area de Hermanos";
   $data['errorl']=1;
   $this->load->view('back_templates/login_view',$data);
 }
}

?>