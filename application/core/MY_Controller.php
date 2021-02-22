<?php
//application/controllers/usuarios.php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_controller extends CI_Controller {
 
			function __construct(){
				parent::__construct();
				error_reporting(E_ALL);
				
			/*js COMUNES PAra EL BACKEND*/
			$js_datatable = array(
				'static/Manager/global_assets/datatables/datatables.min.js',
				'static/Manager/global_assets/datatables/datatables_checkbox.min.js',
				
			);
			$this->js_datatable = $js_datatable;
			$this->footer = $this->load->view('Manager/tpl/footer','',TRUE);
				
				
  }
		function _enviar_email($data, $usr = false, $html = "Consultas"){

   
    $this->load->library('email');
    $this->load->helper('url');
    /* configuro el envio */
			$data['datos']['server'] = $_SERVER['SERVER_NAME'];
    $this->email->from('no-reply@mysetup.com.ar', 'MySetup.com.ar'); 

    if($usr)
    {
    
      $this->email->to($data["datos"]["email"]); 
    
    }
    else
    {
      

//      $this->email->to('guadalupezaneticfinara@gmail.com ');
			$this->email->bcc('tutinocarlos@gmail.com');
     //$this->email->to('info@camposyates.com.ar'); 

//      $this->email->bcc('tutinocarlos@gmail.com'); 
      $this->email->reply_to($data["datos"]["email"], $data["datos"]["full_name"]);
      
    }
    
    $this->email->subject($data["subject"]);

    /* Renderizo el html para enviar */
    $body = $this->load->view('emails/'.$html, $data, TRUE);

    $this->email->message($body);   

    if($this->email->send())
    {
        return TRUE;
    }else{
 		 print_r($this->email->print_debugger(), true);die();
    return FALSE;
		}
	

		}	
}
class FrontendController extends MY_controller{
		
    public function __construct()
    {
        parent::__construct();
					
    }
}

class BackendController extends MY_controller{

		public function __construct(){
			parent::__construct();

			if(!$this->ion_auth->user()->row()){
				redirect('auth/login');
			};

			$this->user = $this->ion_auth->user()->row();
			$this->panel = $this->load_panel();
			

			$this->css_datatable =  array(
			
				'static/Manager/global_assets/datatables/datatables_checkbox.min.css',
			);
			
			
			
		}

	 function load_panel(){

		if (!$this->ion_auth->logged_in()){
			redirect('auth/login');
		}else{
			$user = $this->ion_auth->user()->row();
			$datos = array (
			'user'=> $user,
			);
			
			

			return $this->load->view('Manager/tpl/'.$user->app.'/toolbar',$datos,TRUE);
		}
	}
		

		
	}
	
   


?>