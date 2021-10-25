<?php 

class Login extends Controller implements ControllerInterface {


    public function index(){
        if (Authentication::getLogged()){
            Redirect::to("home");
        }

        $data = [
            'title' => "LOGIN",
        ];

        // $this->view("partials/main_header", $data);
        $this->view("login/login_header", $data);
        $this->view("login/index");
        $this->view("partials/footer");
    }


    public function auth(){
        $auth = Input::post();
        $model = $this->model("Login_Model");
        
        if ($auth['akun'] == "" OR $auth['password'] == "") {
            Redirect::to("login");
        } else {            
            $status = $model->login($auth);

            if ($status != false) {
                Session::make("logged", json_encode($status));

                Redirect::to("home");
            } else {
                Flasher::make("login_error", "LOGIN GAGAL", "NPM/Email atau Password tidak dikenal.");

                $this->index();

            }
        }
    }


    public function hidden(){
        $data = [
            'title' => "HIDDEN REGISTER",
        ];


        if (Input::take("password") != "") {
            $data['hash'] = Hash::make(Input::take("password"), PASSWORD_HASH);

        }


        $this->view("partials/main_header", $data);
        // $this->view("register/navbar");
        $this->view("register/index", $data);
        $this->view("partials/footer");
    }

    public function notfound(){
        $data = [
			'title' => 'NotFound'
		];

		$this->view('partials/main_header', $data);
		$this->view('notfound/index', $data);
		$this->view('partials/footer');
    }


}