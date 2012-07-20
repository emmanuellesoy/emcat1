<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends CI_Controller {
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url'));
        
    }

    public function index()
	{
		$this->load->view('nueva_venta');
	}
}

/* End of file demo.php */
/* Location: ./application/controllers/demo.php */
