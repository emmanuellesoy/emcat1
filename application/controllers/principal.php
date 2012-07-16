<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index(){
            
                $this->load->library(array('sesiones'));
                
                $this->sesiones->hay_sesion();
            
		$this->load->view('menu_principal');
                
        }
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */
