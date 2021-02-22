<?php
//application/controllers/usuarios.php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Productos extends BackendController {
 
	function __construct(){
			parent::__construct();

		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'form_validation'), $this->config->item('error_end_delimiter', 'form_validation'));

		$this->lang->load('auth');
		
		
		$this->script = array(
			'static/Manager/assets/js/secciones/productos/productos.js',
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
			'productos'=> $this->productos->get_productos(),
		);
			
		$this->load->view('Manager/head', $data);
		$this->load->view('Manager/secciones/productos/index');
		$this->load->view('Manager/footer');


	}	
	
	public function nuevo($id=null){

		$id_producto = $this->encryption->decode($id);

		if (!$this->ion_auth->is_clientes()){
			
		}


		
		$estado  = 'error';
		$mensaje = lang('create_prod_subheading');
		
		$this->form_validation->set_rules('categorias[]', 'Categoría ', 'required');	
		$this->form_validation->set_rules('nombre', 'Nombre de producto ', 'required');	
		$this->form_validation->set_rules('detalle', 'Detalle de producto', 'required');
		$this->form_validation->set_rules('file', 'Imagen de producto', 'callback_file_check');
			
		
		if($this->form_validation->run() === true){
			
		$datos = array(
			'nombre_producto'=>trim($this->input->post('nombre')),
			'importe_producto'=>trim($this->input->post('importe')),
			'detalle_producto'=>trim($this->input->post('detalle')),
			'user_add_producto'=>$this->user->id,
			'estado_producto'=>1,
		);

		if($this->productos->Guardar_datos('productos', $datos)){
			$id_producto = $this->db->insert_id();
			
			$this->categorias->asignar_categoria($id_producto,$this->input->post('categorias'));
			$mensaje = 'Registro guardado';
			$estado = 'success';
			
			if($_FILES['file']['name'] != ''){
				if(file_exists($_SERVER ['DOCUMENT_ROOT'].'/'.'static/web/feli/images/uploads')){
		//								die('si existe');
				}else{
					if(!mkdir($_SERVER ['DOCUMENT_ROOT'].'/'.'static/web/feli/images/uploads', 0777, true)) {
		//									die('Fallo al crear las carpetas...');
					}else{
		//									die('si crea');
					}
				}

				$mi_archivo = 'file';

				$nombre = explode('.',$_FILES['file']['name']);

				$archivo = limpiar_caracteres($this->input->post('nombre'));
				$file_ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
				$config['upload_path'] = "static/web/feli/images/uploads";
				$config['file_name']= $id_producto.'_'.date('s').'_'.$archivo.'.'.$file_ext; 
				$config['allowed_types'] = "jpg|jpeg|png|gif|bmp";
				$config['max_size'] = "50000";
				$config['max_width'] = "2000";
				$config['max_height'] = "2000";

				$this->load->library('upload', $config);

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($mi_archivo)) {
					$error = array('error' => $this->upload->display_errors());
					$estado = 'error';
					$mensaje_img = $error;
				}else{
					$estado = 'success';
					$mensaje_img = '<br>Archivo imagen guardado correctamente';
					
					$datos = array(
						'imagen_id_producto'=>$id_producto,
						'url_imagen'=>$config['upload_path'].'/'.$config['file_name'],
					);
					
					if($this->productos->Guardar_datos('imagenes', $datos)){
					$estado = 'success';
					$mensaje_img = '<br>Ruta de imagen guardada correctamente';
					}else{
						$estado = 'error';
						$mensaje_img = '<br>Error Ruta de imagen en db';
					}
				}

			}
			
			
			
		}else{
			$mensaje = 'Error al grabar Producto';
			$estado = 'error';
		}
			
			
		$grabar_datos_array = array(
			'seccion' => 'Agregar Porductos',
			'mensaje' => $mensaje.$mensaje_img,
			'estado' => $estado,
		);
		
		$this->session->set_userdata('save_data',$grabar_datos_array);

		redirect(base_url('Manager/Productos/'));
		}
		
		
		$data=array(
			'script'=>$this->script,
			'scripts'=>$this->js_datatable,
			'tollbar'=> $this->load_panel(),
		);
		
		$data['categorias']=$this->categorias->list();
			
		$this->load->view('Manager/head', $data);
		$this->load->view('Manager/secciones/productos/nuevo', $data);
		$this->load->view('Manager/footer');
	}
		
public function edit($edit = false){

	$data=array(
		'scripts'=>$this->js_datatable,
		'script'=>$this->script,
		'tollbar'=> $this->load_panel(),
	);
		

	$id_producto = $this->encryption->decode($edit);

	if (!$this->ion_auth->is_clientes()){
		redirect('Manager');
	}
		
	if($this->input->post("submit")){


		$this->form_validation->set_rules('nombre', 'Nombre de producto ', 'required');	
		$this->form_validation->set_rules('detalle', 'Detalle de producto', 'required');

		if (!empty($_FILES['file']['name'])) {
			$this->form_validation->set_rules('file', 'Imagen de producto', 'callback_file_check');
		}
			if($this->form_validation->run() === true){

	//					die($id_producto.'sin');
			if (!empty($_FILES['file']['name'])) {
				$mensaje_img ='';
				$file = $this->productos->get_producto($this->input->post('id_producto'));
				$url_image = $file->url_imagen;
				if(file_exists($url_image)){
					if(unlink($url_image)){
						$estado = 'success';
						$mensaje_img = '<br>Imagen Borrada';
					}else{
						$estado = 'error';
						$mensaje_img = '<br>No se borró la imagen';
					}
				}

				$mi_archivo = 'file';
				$nombre = explode('.',$_FILES['file']['name']);

				$archivo = limpiar_caracteres($this->input->post('nombre'));
				$file_ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
				$config['upload_path'] = "static/web/feli/images/uploads";
				$config['file_name']= $this->input->post('id_producto').'_'.date('s').'_'.$archivo.'.'.$file_ext; 
				$config['allowed_types'] = "jpg|jpeg|png|gif|bmp";
				$config['max_size'] = "50000";
				$config['max_width'] = "2000";
				$config['max_height'] = "2000";

				$this->load->library('upload', $config);

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($mi_archivo)) {
					$error = array('error' => $this->upload->display_errors());
					$estado = 'error';
					$mensaje_img = $error;
				}else{
					$estado = 'success';
					$mensaje_img .= '<br>Archivo imagen Actualizado';

					$datos = array(
						'url_imagen'=>$config['upload_path'].'/'.$config['file_name'],
					);

					if($this->productos->actualizar_datos('imagenes',$file->id_imagen, $datos)){
						
						$estado = 'success';
						$mensaje_img .= '<br>Ruta de imagen guardada ';
					}else{
						$estado = 'error';
						$mensaje_img = '<br>Error Ruta de imagen en db';
					}
				}

			}
			$datos = array(
				'nombre_producto'=>trim($this->input->post('nombre')),
				'importe_producto'=>trim($this->input->post('importe')),
				'detalle_producto'=>trim($this->input->post('detalle')),
				'user_add_producto'=>$this->user->id,
				'estado_producto'=>1,
			);

			if($this->productos->actualizar_producto($this->input->post('id_producto'),$datos)){
				
				
			$this->categorias->asignar_categoria ($this->input->post('id_producto'),$this->input->post('categorias'));
		
				$mensaje = 'Registro actualizado';
				$estado = 'success';
			}
		}
			
			$grabar_datos_array = array(
				'seccion' => 'Editar Porductos',
				'mensaje' => $mensaje.$mensaje_img,
				'estado' => $estado,
			);

			$this->session->set_userdata('save_data',$grabar_datos_array);
			$this->session->set_userdata('save_data',$grabar_datos_array);

			redirect(base_url('Manager/Productos/'));
		}
			

		$this->load->view('Manager/head', $data);
		$data['categorias']=$this->categorias->list();
		$data['producto']= $this->productos->get_producto($id_producto);

		$this->load->view('Manager/secciones/productos/edit',$data);
		$this->load->view('Manager/footer');
		
	}
	
public function file_check($str){

		$allowed_mime_type_arr = array('image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');
	  $mime = get_mime_by_extension($_FILES['file']['name']);
		if(isset($_FILES['file']['name']) && $_FILES['file']['name']!=""){
				if(in_array($mime, $allowed_mime_type_arr)){
						return true;
				}else{
						$this->form_validation->set_message('file_check', 'Seleccione archivos permitidos gif/jpg/png');
						return false;
				}
		}else{
				$this->form_validation->set_message('file_check', 'Seleccione imagen de producto.');
				return false;
		}
	}
	
}


?>
