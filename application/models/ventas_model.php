<?php

class Ventas_model extends CI_Model{
    
    public function __construct () {
        
         parent::__construct();
         
         $this->load->database();
        
    }
    
    public function nueva($fecha_compra){
        
        $this->db->insert('ventas', array('fecha_compra' => $fecha_compra));
        
        $this->db->select_max('id_venta');
        
        $consulta = $this->db->get('ventas');
        
        foreach ($consulta->result_array() as $row){
            
            $id_venta = $row;
            
        }
        
        return $id_venta;
        
    }
    
    public function agregar_cliente($id_cliente, $id_venta){
        
        $data = array('id_cliente' => $id_cliente);

        $this->db->where('id_venta =', $id_venta);
        
        $this->db->update('ventas', $data); 
        
    }
    
    public function obtener_fechas_model(){
        
        $this->db->select('fecha_compra');
        
        $this->db->from('ventas');
        
        $this->db->where('fecha_compra !=', '0000-00-00');
        
        $this->db->group_by('fecha_compra');
        
        $consulta = $this->db->get();
        
        if($consulta->num_rows() > 0){
            
            foreach ($consulta->result_array() as $row){
            
                $fechas['fechas'][] = $row;
            
            }
            
        }
        
        return $fechas;
        
    }
    
    public function ver_ventas_por_dia($fecha_compra){
        
        $this->db->select('id_venta, id_cliente');
        
        $this->db->from('ventas');
        
        $this->db->where('fecha_compra', $fecha_compra);
        
        $consulta = $this->db->get();
        
        //echo $this->db->last_query();
        
        if($consulta->num_rows() > 0){
            
            foreach($consulta->result_array() as $row){
                
                $ventas[]= array('id_venta' => $row['id_venta'], 'id_cliente' => $row['id_cliente']);
                
            }
            
        }
        
        //print_r($ventas);
        
        return $ventas;
        
    }
    
    public function detalles($id_venta){
        
        $this->db->select('id_producto, precio_producto, descuento, cantidad');
        
        $this->db->from('productos_compras');
        
        $this->db->where('id_venta', $id_venta);
        
        $consulta = $this->db->get();
        
        //echo $this->db->last_query();
        
        if($consulta->num_rows() > 0){
            
            foreach($consulta->result_array() as $row){
                
                $productos[] = $row; 
                
            }
            
            return $productos;
        }
        
    }
    
    
    
}
    
?>