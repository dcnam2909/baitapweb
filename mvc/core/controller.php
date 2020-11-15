<?php
class controller {
    public function model($modelName){
        require_once "./mvc/model/".$modelName.".php";
        return  new $modelName;
    }

    public function view($viewName, $data=[]){
        require_once "./mvc/views/".$viewName.".php";
    }
}
?>