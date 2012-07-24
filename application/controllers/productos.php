<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper('url');
        
    }

    public function index(){
            
            $this->load->view('productos');
                
        }
        
        public function alta(){
            
            echo $datos['upc'] = $this->input->post('upc');
            
            echo $datos['laboratorio'] = $this->input->post('laboratorio');
            
            echo $datos['nombre'] = $this->input->post('nombre');
            
            echo $datos['principio_activo'] = $this->input->post('principio_activo');
            
            echo $datos['forma_f'] = $this->input->post('forma_f');
            
            echo $datos['precio_p'] = $this->input->post('precio_p');
            
            echo $datos['precio_t'] = $this->input->post('precio_t');
            
            $this->load->model('productos_model', 'p_m', TRUE);
            
            $alta = $this->p_m->alta($datos);
            
            if($alta == 1){
                
                echo 'El producto ha sido dado de alta en la base de datos';
                
                redirect('/principal/index/productos', 'refresh');
                
            } else {
                
                echo 'Ups! no pudimos dar de alta al producto en la base de datos.';
                
            }
            
        }
        
        public function borrar(){
            
            $upc = $this->input->post('upc');
            
            $this->load->model('productos_model', 'p_m', TRUE);
            
            $borrar = $this->p_m->borrar($upc);
            
            echo $borrar;
            
        }
        
        public function buscar_producto(){
            
            $upc = $this->input->post('upc');
            
            $this->load->model('productos_model', 'p_m', TRUE);
            
            $data['datos_producto'] = $this->p_m->buscar_producto($upc);
            
            $data['title'] = 'Buscar Producto';
            
            $data['footer'] = $this->load->view('barra_de_herramientas', '', TRUE);
            
            $data['head'] = $this->load->view('head', $data, TRUE);
            
            $this->load->view('lista_productos', $data);
            
        }
        
        public function listar_productos(){
            
            $this->load->model('productos_model', 'p_m', TRUE);
            
            $data['productos'] = $this->p_m->listar_productos();
            
            $data['title'] = 'Buscar Producto';
            
            $data['footer'] = $this->load->view('barra_de_herramientas', '', TRUE);
            
            $data['head'] = $this->load->view('head', $data, TRUE);
            
            $this->load->view('lista_productos', $data);
            
        }
                
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */
