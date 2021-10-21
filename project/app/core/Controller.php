<?php 


class Controller {
    protected $_model;
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        
        return new $model();
    }
    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';
    }

}