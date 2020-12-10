<?php
//application/controllers/usuarios.php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_controller extends CI_Controller {
 
			function __construct(){
				parent::__construct();
				error_reporting(E_ALL);
				
//				$this->load->library('ciqrcode');
				
				ini_set('display_errors', '1');


//				$this->load->model('manager/Embarcaciones_model');
				
			
//				$menu = $this->contenidos_model->nav_bar();
			
//				$datos = array(
//					'menu' => $menu,
//					'legis_conectadas' => $this->Legislaturas_model->get_legislatura(91),
//				);
			
//				$this->nav = $this->load->view('web/secciones/nav', $datos, TRUE);
//			
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
 		echo 	$this->email->print_debugger();
		}
			die();
    return FALSE;

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
			

			
				/*CSS COMUNES PAAR EL BACKEND*/
				$css_commons = array(
					'static/manager/css/AdminLTE.css',
					'static/manager/plugins/bootstrap/dist/css/bootstrap.min.css',
					'static/manager/Ionicons/css/ionicons.min.css',
					'static/manager/css/skins/_all-skins.min.css',
					'static/manager/font-awesome/css/font-awesome.min.css',
					'static/manager/plugins/toastr/toastr.min.css',
				);
				$this->css_commons = $css_commons;

				/*SCRIPTS COMUNES PARA EL BACKEND */
				$script_commons = array(
					'static/manager/jquery/jquery.min.js',
					'static/manager/plugins/toastr/toastr.js',
					'static/manager/plugins/bootstrap/dist/js/bootstrap.min.js',
					'static/manager/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
					'static/manager/plugins/fastclick/fastclick.js',
					'static/manager/js/adminlte.js',
					'static/manager/js/demo.js',
				);
				$this->script_commons = $script_commons;
			
				$this->panel = $this->load_panel();
		}

	 function load_panel(){

		if (!$this->ion_auth->logged_in())
		{
			die('casdsasd');
			redirect('auth/login');
		}else{

			$user = $this->ion_auth->user()->row();
			$datos = array (
			'nav'=> $user->id,
			);

			$data = array(
		//	'header' => $this->load->view('manager/etiquetas/header', $datos, TRUE),
			'aside' => $this->load->view('manager/etiquetas/aside',$datos,TRUE)
			);

			return $this->load->view('manager/etiquetas/aside',$datos,TRUE);
		}
	}
		

		
	}
	
   


?>
