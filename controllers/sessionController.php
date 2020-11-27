<?php
Class sessionController{
    private $model;
    public function __construct() {
        $this->model=new usuarioModel();
    }
    public function login($session_data=array()){
        return $this->model->login($session_data);
    }
    public function logout(){
    session_unset();
    session_destroy();
    }
}
?>


