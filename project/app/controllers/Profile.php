<?php 

class profile extends Controller implements ControllerInterface {


    private function cekLogin()
    {
        if (!Authentication::getLogged()) {
            Redirect::to("login");
        }
    }

    
    public function index(){
        if (!Authentication::getLogged()) {
            Redirect::to("login");
        }


        $data = [
            "title" => 'Profile',
            'user' => Authentication::getUser(),
        ];

        $this->view('partials/main_header', $data);
        $this->view('partials/main_navbar', $data);
        $this->view('profile/index', $data);
        $this->view('partials/dashboard_footer');
    }


    public function logout(){
        Session::drop("logged");
        Redirect::to("login");
    }

}