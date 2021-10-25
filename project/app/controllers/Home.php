<?php 

class Home extends Controller implements ControllerInterface {


    
    public function index(){
        if (!Authentication::getLogged()) {
            Redirect::to("login");
        }


        $data = [
            "title" => 'Home',
            'user' => Authentication::getUser(),
            
        ];

        $this->view('home/dashboard_header', $data);
        $this->view('home/index', $data);
        $this->view('home/dashboard_footer');
    }





    public function logout(){
        Session::drop("logged");
        Redirect::to("login");
    }




    
    public function notfound(){
        $data = [
            'title' => 'Home | NotFound'
        ];

        $this->view('partials/main_header', $data);
        $this->view('notfound/index', $data);
        $this->view('partials/footer');
    }
}