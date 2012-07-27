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
        
        $sql = 'SELECT upc, nombre, laboratorio, principio_activo, forma_f, precio_p, precio_t FROM productos WHERE (nombre = ? OR upc = ?)';

        $consulta = $this->db->query($sql, array($nombre_upc, $nombre_upc));
        
        if($consulta->num_rows() > 0){
            
            foreach ($consulta->result_array() as $row) {

                $datos_producto = $row;

            }
            
        } else {
            
            $datos_producto = 0;
            
        }
        
        $datos_producto = json_encode($datos_producto);
        
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
    
}

?>