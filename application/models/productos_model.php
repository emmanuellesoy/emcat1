<?php

class Productos_model extends CI_Model{
    
    public function __construct () {
        
         parent::__construct();
         
         $this->load->database();
        
    }
    
    public function alta($datos){
        
        $sql = 'INSERT INTO productos 
            (upc, laboratorio, nombre, principio_activo, forma_f, precio_p, precio_t) 
            VALUES("'.$datos['upc'].'", "'.$datos['laboratorio'].'", "'.$datos['nombre'].'", "'.$datos['principio_activo'].'", "'.$datos['forma_f'].'", "'.$datos['precio_p'].'", "'.$datos['precio_t'].'")';

        $consulta = $this->db->query($sql);

        if($consulta){
            
            return 1;
            
        } else {
            
            return 0;
            
        }
        
    }
    
    public function borrar($upc){
        
        $sql = 'DELETE FROM productos WHERE upc = ?';
        
        $consulta = $this->db->query($sql, array($upc));
        
        $sql = 'SELECT upc FROM productos WHERE upc = ?';
        
        $consulta = $this->db->query($sql, array($upc));
        
        if($consulta->num_rows() == 0){
            
            $deleted = 'El producto se ha eliminado de la base de datos';
            
        } else {
            
            $deleted = 'Ups! No pudimos realizar la actualización de la base de datos';
            
        }
        
        return $deleted;
        
    }
    
    public function buscar_producto($nombre_upc){
        
        $this->db->select('*');
        
        $this->db->from('productos');
        
        $this->db->where('nombre', $nombre_upc);
        
        $this->db->or_where('upc', intval($nombre_upc));
        
        $consulta = $this->db->get();
        
        if($consulta->num_rows() > 0){
            
            foreach ($consulta->result_array() as $row) {

                $datos_producto = $row;

            }
            
        } else {
            
            $datos_producto = 0;
            
        }
        
        //$datos_producto = json_encode($datos_producto);
        
        return $datos_producto;
        
    }
    
    public function listar_productos(){
        
             $sql = 'SELECT id_producto, upc, nombre, laboratorio, principio_activo, forma_f, precio_p, precio_t FROM productos ORDER BY nombre';
             
             $consulta = $this->db->query($sql);
             
             if($consulta->num_rows() > 0){
            
                foreach ($consulta->result_array() as $row) {

                    $datos_producto[$row['id_producto']] = $row;

                }
            
            } else {

                $datos_producto = 0;

            }
            
            return $datos_producto;
        
    }
    
    public function agregar_producto_venta($id_producto, $id_venta, $descuento, $cantidad, $precio_p){
        
         $data = array(
            'id_producto' => $id_producto,
            'id_venta' => $id_venta,
            'precio_p' => $precio_p,
            'descuento' => $descuento,
            'cantidad' => $cantidad
        );

        $this->db->insert('productos_compras', $data); 
        
    }
    
    public function dump_sql_model($datos){
        
        $this->db->insert_batch('productos', $datos);
        
    }
    
}

?>