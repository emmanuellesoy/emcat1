<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ventas extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url', 'file'));
        
        $this->load->helper('date');
        
    }

    public function agregar_producto($nombre_upc){
        
        $this->load->model('productos_model', 'p_m');
        
        $datos = $this->p_m->buscar_producto($nombre_upc);
        
        $id_producto = $datos['id_venta'];
        
        $precio_p = $datos['precio_p'];
        
        $id_venta = $this->input->post('id_venta');
        
        $descuento = $this->input->post('descuento');
        
        $cantidad = $this->input->post('cantidad');
        
        $this->p_m->agregar_producto_venta($id_producto, $id_venta, $descuento, $cantidad, $precio_p);
        
        print_r(json_encode($datos));
        
        //return($datos);
        
    }
    
    public function nueva_venta(){
        
        $fecha_compra = mdate("%Y-%m-%d");
        
        $this->load->model('ventas_model', 'v_m', TRUE);
        
        $id_venta = $this->v_m->nueva($fecha_compra);
        
        redirect('/principal/index/nueva_venta/'.$id_venta['id_venta'], 'refresh');
        
    }
    
    public function ver_fechas_ventas(){
        
        $this->load->model('ventas_model', 'v_m', TRUE);
        
        $data = $this->v_m->obtener_fechas_model();
        
        $this->load->view('fechas_reportes', $data);
        
    }
    
    public function mostrar_ventas_dia(){
        
        $this->load->model('ventas_model', 'v_m', TRUE);
        
        $datos['ventas'] = $this->v_m->ver_ventas_por_dia($this->input->post('fecha_venta'));
        
        $this->load->model('clientes_model', 'c_m', TRUE);
        
        $datos['clientes'] = $this->c_m->listar_clientes();
        
        $this->load->view('ventas_dia', $datos);
        
    }
    
    public function ventas_detalle(){
        
        $datos['numeroDeVenta'] = $this->input->post('numero_venta');
        
        $this->load->model(array('ventas_model', 'clientes_model'));
        
        $datos['productos'] = $this->ventas_model->detalles($datos['numeroDeVenta']);
        
        $datos['title'] = 'Detalle Venta';
            
        $datos['footer'] = $this->load->view('barra_de_herramientas', '', TRUE);
            
        $datos['head'] = $this->load->view('head', $datos, TRUE);
        
        $this->load->view('detalles', $datos);
        
    }
                
}

/* End of file principal.php */
/* Location: ./application/controllers/ventas.php */
