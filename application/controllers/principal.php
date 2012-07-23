<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper('url');
        
    }

    public function index($seccion = NULL, $datos = NULL){
        
            print_r($datos);
        
            if($seccion == NULL) {
                
                $data['contenido'] = '';
                
                $data['seccion'] = 'Bienvenido';
                
                $data['title'] = 'Bienvenido';
                
            } else {
                
                $data['contenido'] = $this->load->view($seccion, $datos, TRUE);
                
                $data['seccion'] = ucwords(str_replace('_', ' ', $seccion));
                
                $data['title'] = ucwords(str_replace('_', ' ', $seccion));
                
            }
            
             $data['head'] = $this->load->view('head', $data, TRUE);
             
             $data['footer'] = $this->load->view('barra_de_herramientas', '', TRUE);
            
            $this->load->view('menu_principal', $data);
                
        }
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */
