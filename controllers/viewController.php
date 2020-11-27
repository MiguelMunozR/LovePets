<?php
class ViewController{
    private static $view_path= './views/';
    public function loadview($view){
        require_once (self::$view_path. $view. 'View.php');
    }
    public function __destruct() {
        
    }
} 
?>