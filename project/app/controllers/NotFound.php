<?php 

class NotFound extends Controller {

    public function index(){
        $this->view('partials/main_header', [
            'title' => 'NotFound',
        ]);
        $this->view('notfound/index', [
            'title' => 'NotFound'
        ]);
        $this->view('partials/footer');
    }

    
    public function notfound(){
        $this->index();
    }

}