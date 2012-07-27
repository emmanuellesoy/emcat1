<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ventas extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper('url');
        
    }

    public function agregar_producto($nombre_upc){
        
        $this->load->model('productos_model', 'p_m', TRUE);
        
        $datos = $this->p_m->buscar_producto($nombre_upc);
        
        print_r($datos);
        
        //return($datos);
        
    }
                
}

/* End of file principal.php */
/* Location: ./application/controllers/ventas.php */
