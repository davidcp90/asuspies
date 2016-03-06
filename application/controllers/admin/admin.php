<?php

class Admin extends Application
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if(logged_in())
		{
			 $data['title']="Area de Hermanos";
			
  $data['css_files']=null;
  $data['js_files']=null;
			$this->ag_auth->view('dashboard',$data);
		}
		else
		{
			 $data['title']="Area de Hermanos";
			 $data['errorl']=FALSE;
  $data['css_files']=null;
  $data['js_files']=null;
			$this->ag_auth->view('login',$data);
		}
	}
	function faillog(){
		 $data['title']="Area de Hermanos";
			 $data['errorl']=TRUE;
  $data['css_files']=null;
  $data['js_files']=null;
		$this->ag_auth->view('loginfail',$data);
	}

}

/* End of file: dashboard.php */
/* Location: application/controllers/admin/dashboard.php */