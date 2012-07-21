<?php
if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');

class Sesiones {
    
    function hay_sesion(){
        
        $CI =& get_instance();

        $CI->load->library(array('session'));

        $data = $CI->session->all_userdata();

        if (empty($data['session']['usuario_id'])) {

            echo 'No existe sesión';

            $this->crear_sesion();
            
            //$this->load->view('loggin_view');

        } else {

            echo 'Ya existe una sesión';

            //$this->principal();

        }

    function crear_sesion(){
        
        echo 'Hola';
        
        //$CI =& get_instance();

        //$CI->load->library(array('session'));
        
        //$sesion = array('usuario_id'=> '012454', 'nombre' => 'Juan Pérez Pérez');
        
        //$CI->session->set_userdata($sesion);

    }
        
    }
    
}
?>
