<?php
class Autoload{
    public function __construct() {
        //https://www.php.net/manual/es/function
        spl_autoload_register(function($class_name){
            $models_path='./models/'.$class_name.'.php';
            $controllers_path='./controllers/'.$class_name.'.php';
            if(file_exists($models_path)){
            require_once ($models_path);
            //echo "<br>".$models_path;
            }
            if(file_exists($controllers_path)){
            require_once ($controllers_path);
            //echo "<br>".$controllers_path;
            }
    });
   
}
 public function __destruct(){
        
    }
}