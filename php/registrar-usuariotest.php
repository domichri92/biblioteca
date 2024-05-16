<?php  

require_once("registrar-usuario.php");

class Registrar_usuariotest extends PHPUnit_Framework_TestCase {
    protected function setUp() {  
        $this->CI =& get_instance();
    }
    protected function tearDown() {
        unset($this->CI);
    }
    public function test_registrar() {
        $this->CI->load->model("");
    }
}