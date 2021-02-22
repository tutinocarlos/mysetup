<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Imagenes_model extends CI_Model{

	public function Guardar_imagen($tabla, $data){
		
		/* validar guardar archivo */
		
		
		$mi_archivo = 'file';

		$nombre = explode('.',$_FILES['file']['name']);

		$archivo = limpiar_caracteres($this->input->post('nombre'));
		$file_ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
		$config['upload_path'] = "static/web/feli/images/uploads";
		$config['file_name']= date('s').'_'.$archivo.'.'.$file_ext; 
		$config['allowed_types'] = "jpg|jpeg|png|gif|bmp";
		$config['max_size'] = "50000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";

		$this->load->library('upload', $config);
		
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($mi_archivo)) {
			$error = array('error' => $this->upload->display_errors());
//									die('no sube');
			
			$return = array(
				'mensaje' =>$error,
			);
			return $return;
			}
		
		

		$this->db->insert(,$data);
 
		if( $id = $this->db->insert_id() ){
			return TRUE;
		}
 
		return FALSE;
	}
}