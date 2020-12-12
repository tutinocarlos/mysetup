<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}	
	public function contratar(){
//		var_dump($_POST);die();
//$status = http_response_code(500);
		
		if( $this->input->is_ajax_request() ){
			$html = '';
			$class = 'error';
			$error = true;
			$status =  200;
			$email_data = array(
				'datos'   => $this->input->post(),
				'subject' => 'Contrato Online'
			);

				 /* Quito el uri para enviar el email */

//                unset($email_data["datos"]["uri"]);


					/* function enviar_email */
					if ( $this->_enviar_email( $email_data ) )
					{
//						die('manda');
						$msj = 'Mensaje Enviado';
						$class = 'success';
						$error = false;
						$html = '<div class="container">	<div class="row"><div class="alert-group"><div class="alert alert-success "><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>       <strong>Perfecto !!</strong><br>en breve recibiras un email a: '.$this->input->post('email').' <br>para continuar el proceso de activación y delegación.</div></div></div></div>';

					}else{

						$msj = 'Error el emviar su mensaje';
					}
		
		}else{
		$status = 	500;
//			redirect(base_url());
		}
       $response = array(
			 	'status'=>$status,
			 	'post'=>$_POST,
			 	'msj'=>$msj,
			 	'class'=>$class,
			 	'error'=>$error,
			 	'html'=>$html,
				 
			 );
		echo json_encode($response);

//		$this->load->view('welcome_message');
	}
}