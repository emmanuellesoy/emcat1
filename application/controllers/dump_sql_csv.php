<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dump_sql_csv extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper('url');
        
        $this->load->helper('file');
        
    }
    
    public function index(){
        
        $string = read_file('statics/lista.csv');
        
        $rows = explode(';', $string);
        
        foreach($rows as $row){
            
            $obtener_datos = explode('|', $row);
            
            //echo '<pre>';
            
            //print_r($obtener_datos);
            
            //echo '</pre>';
            
            $query[] = array(
                'laboratorio' => trim($obtener_datos[0]),
                'nombre' => trim($obtener_datos[1]),
                'principio_activo' => trim($obtener_datos[2]),
                'forma_f' => trim($obtener_datos[3]),
                'precio_p' => trim($obtener_datos[4]),
                'precio_t' => trim($obtener_datos[5]),
                'upc' => trim($obtener_datos[6])
            );
            
        }
        
        $this->load->model('productos_model', 'p_m', TRUE);
        
        $this->p_m->dump_sql_model($query);
        
        print_r($query);
        
    }
    
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */