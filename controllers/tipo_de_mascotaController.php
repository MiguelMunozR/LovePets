<?php
//require_once ("../../models/tipo_usuariosModel.php");
Class tipo_de_mascotaController{
    private $model;
    public function __construct() {
        $this->model = new tipo_de_mascotaModel();
    }
    public function insert($tipouser =array()){
        return $this->model->insert($tipouser);
    }
    public function update($tipouser=array()){
        return $this->model->update($tipouser);
    }
    public function select($idtipouser=''){
        return $this->model->select($idtipouser);
    }
    public function delete($iduser){
        return $this->model->delete($iduser);
    }
}
?>

