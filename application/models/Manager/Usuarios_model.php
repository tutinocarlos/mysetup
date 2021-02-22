<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Usuarios_model extends CI_Model{
	
	public function get_dt(){

		$draw = intval(2);
		$start = intval(0);
		$length = intval(0);

		$query = $this->db->select("*")->get('users');
		$data = [];
		$users = $this->ion_auth->users()->result(); // get all users
		
		foreach($users as $r) {
			$id = $this->encryption->encode($r->email);
			$editar = '<a href="'.base_url('Manager/Usuarios/edit/'.$id).'" type="button" class="btn btn-light icon-pencil5 mr-3 icon-2x" on></a>';
			$borrar='<a href="'.base_url('Manager/usuarios/borrar/'.$id).'"type="button" class="btn btn-light  icon-trash mr-3 icon-2x"></a>';
			$suspender='<a href="'.base_url('Manager/usuarios/suspender/'.$id).'"type="button" class="btn btn-light icon-stop mr-3 icon-2x"></a>';
			$activar='<a href="'.base_url('Manager/usuarios/activar/'.$id).'"type="button" class="btn btn-light icon-play4 mr-3 icon-2x"></a>';
			$resetpsw='<a href="'.base_url('Manager/usuarios/reset/'.$id).'"type="button" class="btn btn-light icon-reset mr-3 icon-2x"></a>';

			
			$tipo_usuario = $this->ion_auth->get_users_groups($r->id)->result();
			foreach($tipo_usuario as $user){
				
			}
			
			$data[] = array(
				'<td></td>',
				$r->last_name.','.$r->first_name.' - '.$r->nombre_empresa,
				$r->email,
				$tipo_usuario[0]->description,

				$editar.$resetpsw.$borrar.$suspender.$activar,
				$r->id,
			);
		}

		$result = array(
			"draw" => $draw,
			"recordsTotal" =>$query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data
		);

	echo json_encode($result);
		
		
       
	}
	
	
	
 
}