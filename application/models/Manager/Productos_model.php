<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Productos_model extends CI_Model{

	public function Guardar_datos($tabla, $data){

		$this->db->insert($tabla,$data);
 
		if( $id = $this->db->insert_id() ){
			return TRUE;
		}
 
		return FALSE;
	}
	
	public function actualizar_producto($id_producto ,$data){
		$this->db->where('id_producto', $id_producto);
		return $this->db->update('productos', $data);
	}	
	public function actualizar_datos($tabla,$id_imagen ,$data){
		$this->db->where('id_imagen', $id_imagen);
		return $this->db->update($tabla, $data);
	}
	
	
	public function get_productos(){
		$query = $this->db->select('productos.*, imagenes.*')
							->join('imagenes','imagenes.imagen_id_producto = productos.id_producto')
//							->join('cate_prod','cate_prod.id_cateprod_pro = productos.id_producto')
							->order_by('productos.id_producto','desc')
							->get('productos');

      if ($query->result() > 0){
				
				foreach($query->result() as $data){
					$data->categorias= $this->categorias->list_cate($data->id_producto);
				}
 					
          return $query->result();
 
      }
	}	
	public function get_producto($id_producto){
		$query = $this->db->select('productos.*, imagenes.*')
													->join('imagenes','imagenes.imagen_id_producto = productos.id_producto')
													->where('id_producto',$id_producto)
//                          ->order_by('tau_model')
                          ->get('productos');

      if ($query->result() > 0){
 								foreach($query->result() as $data){
					$data->categorias= $this->categorias->list_cate($data->id_producto);
				}
          return $query->row();
 
      }
	}
}