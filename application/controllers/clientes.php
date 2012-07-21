<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function index(){
            
                $this->load->library(array('sesiones'));
                
                $this->sesiones->hay_sesion();
            
		$this->load->view('menu_principal');
                
        }
        
        public function alta($datos){
            
            unset($datos);
            
            $datos['nombre'] = 'Emmanuelle';
            
            $datos['apellido_p'] = 'Laguna';
            
            $datos['apellido_m'] = 'Marin';
            
            $datos['calle_numero'] = 'Agustin Diaz 91';
            
            $datos['colonia'] = 'La Conchita Zapotitlan';
            
            $datos['delegacion_municipio'] = 'Tlahuac';
            
            $datos['codigo_postal'] = '13360';
            
            $datos['telefono_p'] = '58665699';
            
            $datos['telefono_m'] = '5534187282';
            
            $datos['correo_e'] = 'emmanuelle.laguna@gmail.com';
            
            $datos['rfc'] = 'LAME850323BK1';
            
            $this->load->model('clientes_model', 'c_m', TRUE);
            
            $alta = $this->c_m->alta($datos);
            
            if($alta == 1){
                
                echo 'El clientes ha sido dado de alta en la base de datos';
                
            } else {
                
                echo 'Ups! no pudimos dar de alta al cliente en la base de datos.';
                
            }
            
        }
        
        public function borrar($id_cliente){
            
            $this->load->model('clientes_model', 'c_m', TRUE);
            
            $borrar = $this->c_m->borrar($id_cliente);
            
            echo $borrar;
            
        }
        
        public function buscar_clientes($id_cliente){
            
            $this->load->model('clientes_model', 'c_m', TRUE);
            
            $borrar = $this->c_m->buscar_clientes($id_cliente);
            
            print_r($borrar);
            
        }
                
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */
