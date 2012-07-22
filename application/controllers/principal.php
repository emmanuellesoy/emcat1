<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper('url');
        
    }

    public function index($seccion = NULL){
            
            if($seccion == NULL){
                
                $data['contenido'] = 'principal';
                
                $data['seccion'] = 'Bienvenido';
                
                $data['title'] = 'Bienvenido';
                
            } else {
                
                $data['contenido'] = $this->load->view($seccion, '', TRUE);
                
                $data['seccion'] = '';
                
                $data['title'] = ucwords(str_replace('_', ' ', $seccion));
                
            }
            
             $data['head'] = $this->load->view('head', $data, TRUE);
            
            $this->load->view('menu_principal', $data);
                
        }
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */
