<?php

class Clientes_model extends CI_Model{
    
    public function __construct () {
        
         parent::__construct();
         
         $this->load->database();
        
    }
    
    public function alta($datos){
        
        $sql = 'INSERT INTO clientes 
            (nombre, apellido_p, apellido_m, calle_numero, colonia, delegacion_municipio, codigo_postal, telefono_p, telefono_m, correo_e, rfc) 
            VALUES("'.$datos['nombre'].'", "'.$datos['apellido_p'].'", "'.$datos['apellido_m'].'", "'.$datos['calle_numero'].'", "'.$datos['colonia'].'", "'.$datos['delegacion_municipio'].'", "'.$datos['codigo_postal'].'", "'.$datos['telefono_p'].'", "'.$datos['telefono_m'].'", "'.$datos['correo_e'].'", "'.$datos['rfc'].'")';

        $consulta = $this->db->query($sql);

        if($consulta){
            
            return 1;
            
        } else {
            
            return 0;
            
        }
        
    }
    
    public function borrar($dato){
        
        $sql = 'DELETE FROM clientes WHERE (id_cliente = ? OR nombre = ?)';
        
        $consulta = $this->db->query($sql, array($dato));
        
        $sql = 'SELECT id_cliente FROM clientes WHERE id_cliente = ?';
        
        $consulta = $this->db->query($sql, array($dato));
        
        if($consulta->num_rows() == 0){
            
            $deleted = 'El cliente se ha eliminado de la base de datos';
            
        } else {
            
            $deleted = 'Ups! No pudimos realizar la actualización de la base de datos';
            
        }
        
        return $deleted;
        
    }
    
    public function buscar_clientes($apellido_p){
        
        $sql = 'SELECT id_cliente, nombre, apellido_p, apellido_m, calle_numero, colonia, delegacion_municipio, codigo_postal, telefono_p, telefono_m, correo_e, rfc FROM clientes WHERE apellido_p = ?';

        $consulta = $this->db->query($sql, array($apellido_p));
        
        if($consulta->num_rows() > 0){
            
            foreach ($consulta->result_array() as $row) {

                $datos_cliente = $row;

            }
            
        } else {
            
            $datos_cliente = 0;
            
        }
        
        return $datos_cliente;
        
    }
    
    public function listar_clientes(){
        
             $sql = 'SELECT id_cliente, nombre, apellido_p, apellido_m, calle_numero, colonia, delegacion_municipio, codigo_postal, telefono_p, telefono_m, correo_e, rfc FROM clientes';
        
    }
    
    public function editar($datos){
        
        $sql = 'UPDATE clientes SET nombre = ?, apellido_p = ?, apellido_m = ?, calle_numero = ?, colonia = ?, delegacion_municipio = ?, codigo_postal = ?, telefono_p = ?, telefono_m = ?, correo_e = ?, rfc = ?';
        
        $consulta = $this->db->query($sql, array($datos['nombre_cliente'], $datos['apellido_p'], $datos['apellido_m'], $datos['calle_numero'], $datos['colonia'], $datos['delegacion_municipio'], $datos['codigo_postal'], $datos['telefono_particular'],  $datos['telefono_movil'], $datos['correo_e'], $datos['rfc']));
        
    }
    
}

?>