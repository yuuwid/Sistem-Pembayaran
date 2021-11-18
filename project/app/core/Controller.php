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

    


    
    public function notfound(){
        $data = [
            'title' => 'Page NotFound'
        ];

        $this->view('partials/main_header', $data);
        $this->view('notfound/index', $data);
        $this->view('partials/footer');
    }
}