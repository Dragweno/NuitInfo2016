<?php
class Controller {
        
    protected $smarty;
        
    function __construct() {
    	$this->smarty = new Smarty ();
    	$this->smarty->template_dir = 'templates/';
    	$this->smarty->compile_dir = 'templates_c/';
    	$this->smarty->config_dir = 'configs/';
    	$this->smarty->cache_dir = 'cache/';
    }
    
}
?>