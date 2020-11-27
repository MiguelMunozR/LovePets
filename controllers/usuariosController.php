<?php
//require_once ("../../models/usuarioModel.php");
Class usuariosController{
    private $model;
    public function __construct() {
        $this->model=new usuarioModel();
    }
    public function insert($user_data =array()){
        return $this->model->insert($user_data);
    }
    public function update($user_data=array()){
        return $this->model->update($user_data);
    }
    public function select($id=''){
        return $this->model->select($id);
    }
    public function delete($user_id){
        return $this->model->delete($user_id);
    }
    public function selectUsuario($user=array()) {
        return $this->model->selectUsuario($user);
    }
}
?>

