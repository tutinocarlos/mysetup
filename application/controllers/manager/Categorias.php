<?php
//application/controllers/usuarios.php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Categorias extends BackendController {
 
	function __construct(){
			parent::__construct();
//				$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'form_validation'), $this->config->item('error_end_delimiter', 'form_validation'));
//				$this->lang->load('auth');
//		
		
		$this->script = array(
			'static/Manager/assets/js/secciones/categorias/categorias.js',
		);

	}

	public function index(){

		$id = $this->encryption->decode('cadena');
		if($this->input->is_ajax_request()){
			$usuarios = $this->usuarios->get_dt(true);

			return $usuarios;
		}
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
		
//		var_dump($usuarios);
		$data=array(
			'scripts'=>$this->js_datatable,
			'script'=>$this->script,
			'tollbar'=> $this->load_panel(),
		);
			
		$this->load->view('Manager/head', $data);
		$this->load->view('Manager/secciones/categorias/index');
		$this->load->view('Manager/footer');


	}	

	public function grabar(){
		if ($this->ion_auth->is_clientes()){

				$this->form_validation->set_rules('nombre_cate', 'Nombre', 'required');

				if($this->form_validation->run() === true){
					$mensaje = 'Error al grabar';
					$estado = 'error';
					
					$data = array(
						'nombre_cate'=>trim($this->input->post('nombre_cate')),
						'estado_cate'=>1,
					);
					
					if($this->categorias->grabar('categorias',$data )){
						$mensaje = 'Grabado OK';
						$estado = 'success';
					}
					$grabar_datos_array = array(
						'seccion' => 'Agregar Categorías',
						'mensaje' => $mensaje,
						'estado' => $estado,
					);
					$this->session->set_userdata('save_data',$grabar_datos_array);
				};
				$data=array(
					'scripts'=>'',
					'script'=>$this->script,
					'tollbar'=> $this->load_panel(),
				);

				$this->load->view('Manager/head', $data);
				$this->load->view('Manager/secciones/categorias/index');
				$this->load->view('Manager/footer');
		}else{
			redirect('auth/login');
		}
		
	}
	public function list(){
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
		if($this->input->is_ajax_request())
		{
			$response['categorias'] ='<div class="alert alert-warning alert-styled-left alert-dismissible"><button type="button" class="close" data-dismiss="alert"><span>×</span></button><span class="font-weight-semibold">Debes agregar Categorias!</span></div>';
			$categorias = $this->categorias->list();
			if($categorias){
				$cate ='';
				foreach($categorias as $data){
					//$cate .='<button id="'.$data->id_cate.'" type="button" class="btn alpha-purple text-purple-800 "><span>'.$data->nombre_cate.'</span></button>';
			$cate .='<a href="#" class="alert-link"><div class="alert alert-primary alert-styled-right alert-dismissible"><button type="button" class="close" data-dismiss="salert"><span>×</span></button><span class="font-weight-semibold">'.$data->nombre_cate.'</span> </div></a>';
				}
				
				
				$response['categorias'] = $cate;
			}
			
			
			echo json_encode($response);
		}
	}

	function cambiar_estado(){
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}


		if ($this->ion_auth->is_super()){

			if($this->Usuarios_model->cambiar_estado()){

				$result = array(
					'estado' => true,
				);

			}else{
				$result = array(
					'estado' => false,
				);

			}

			
		}else{
			echo 'Necesita permisos de super usuario para realizar esta acción';
		}

		echo json_encode($result);
	}

	function desactivado(){

		$seccion = $this->load->view('manager/secciones/usuario_desactivado', 'dada',TRUE);
 
		
		$data = array(
				'nav' => $this->nav,
				'fecha' => $this->fecha,
				'content' => $seccion,
				'script' => ''
		);

		$this->load->view('web/head',$data);
		$this->load->view('web/index',$data);
		$this->load->view('web/footer',$data);


	}
	
	function cambiar_pwd(){
		/*funcionando*/
		
		$password = randon_password(5);
		
		$usuario = $this->ion_auth->user($this->input->post('id_user'))->row();

		$data = array(
          're_password' =>0,
          'password' =>$password,
		);
		$message = '';
		$status = false;
		if ($this->ion_auth->update($this->input->post('id_user'), $data)){
			$status = true;
			$messages = $this->ion_auth->messages_array();
			
			foreach ($messages as $message){
				$message =  $message;
			}

		$data = array(
			"nombre" => $usuario->first_name,
			"apellido" => $usuario->last_name,
			"identity" => $usuario->email,
			"temporal" => $password,
			'datoss'=> 'completar el proceso'
		);
			
		$this->load->library('email');
		$this->load->helper('url');
    /* configuro el envio */
		$html = $this->load->view($this->config->item('email_templates', 'ion_auth').$this->config->item('reset_pwd', 'ion_auth'), $data, true);
			
		$subject = 'Cambio de contraseña - Legislaturas Conectadas';
	/*NUEVO*/
		$this->email->from('webmaster@legislaturasconectadas.gob.ar', 'Legislaturas Conectadas - Cambio de contraseña de acceso');
			
		$this->email->to($usuario->email,'Cambio de contraseña de acceso');
		$this->email->subject('Legislaturas Conectadas - cambio de contraseña');
			
	 	$this->email->message($html);   

    if($this->email->send())
    {
			$message .= '<br> Se ha enviado email al usuario';
			$status = true;
    }else{
			$message .= '<br> Error al enviar email al usuario';
			$status = false;
		}
//			die();
	/*NUEVO*/
//				$set_pass = semdMailGmail($usuario->email,$subject, $html,$attach=FALSE );

    }
    else{
			$errors = $this->ion_auth->errors_array();
			foreach ($errors as $error)
			{
				$message .= $error;
			}
    }

		$response = array(
				'estado'=>$status,
				'password'=>$password,
				'message'=>$message,
				'html'=>$html
			);

		echo json_encode($response);
	}
	
	
	/* deja de ser utilizada para no borrar los usuarios */
	function borrar_usuario(){
		$borra = $this->input->post('borrar');
		$status = true;
		$message = '';
		
		switch ($borra) {
    case 1:
			 
						try {
							$result =  $this->ion_auth->delete_user($this->input->post('id_user'));
								if ($result){
									$message .= '<br>Usuario Borado';
								}
							}catch (\Exception $e){
									$status = false;

							$message .= $e->getMessage();
						}
        break;
			case 0:
				

					if($this->Usuarios_model->borrar_usuario()){
						$message .= '<br>Usuario Removido';
					}else{
						$message .= '<br>ERROR Usuario DESVINCULADO';
						$status = false;
        break;
						
		}
		}
		

		$response = array(
			'estado'=>$status,
			'message'=>$message,
		);
		echo json_encode($response);
		
	}

	
}


?>
