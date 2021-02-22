<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Categorias_model extends CI_Model{

	public function asignar_categoria ($id_producto,$categorias){
		$this->db->delete('cate_prod', array('id_cateprod_pro' => $id_producto));
		$x = 0;
		foreach($categorias as $key=>$value){

		$batch[$x]['id_cateprod_pro'] = $id_producto;
		$batch[$x]['id_cateprod_cate'] = $value;
			$x++;

		}

//			var_dump($categorias); die();
		$this->db->insert_batch('cate_prod', $batch);
//		 die($this->db->last_query());
	}
	
	public function grabar($tabla, $data){
		
		$this->db->insert($tabla,$data);
 
		if( $id = $this->db->insert_id() ){
			return TRUE;
		}
 
		return FALSE;
	}
	public function list($home = false){
		$query = $this->db->select('*')->get('categorias');
		
      if ($query->result() > 0){
          return $query->result();
      }
		return false;
	}	
		
	public function list_cate($id_producto){
		$query = $this->db->select('cate_prod.*,categorias.nombre_cate')
			->join('categorias', 'categorias.id_cate = cate_prod.id_cateprod_cate')
			->where('cate_prod.id_cateprod_pro',$id_producto)
			->get('cate_prod');
      if ($query->result() > 0){
          return $query->result();
      }
		return false;
	}	
	
	function check($id_cate){

			$query = $this->db->select('*')
			->where('id_cateprod_cate',$id_cate)
			->get('cate_prod');

		if (count($query->result()) > 0){
			return true;
      }else{
			return false;
		}
	}
	
	
	
	public function get_producto($id_producto){
		$query = $this->db->select('productos.*, imagenes.*')
													->join('imagenes','imagenes.imagen_id_producto = productos.id_producto')
													->where('id_producto',$id_producto)
//                          ->order_by('tau_model')
                          ->get('productos');

      if ($query->result() > 0){
 					
          return $query->row();
 
      }
	}
}