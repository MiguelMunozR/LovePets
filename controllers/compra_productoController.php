<?php
//require_once ("../../models/usuarioModel.php");
Class compra_productoController{
    private $model;
    public function __construct() {
        $this->model=new compra_productoModel();
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
   
}
?>
