<?php 

class PembayaranBPP extends Controller implements ControllerInterface {


    
    public function index(){
        if (!Authentication::getLogged()) {
            Redirect::to("login");
        }


        $data = [
            "title" => 'Sistem Pembayaran',
            'user' => Authentication::getUser(),
        ];

        
        $this->view('partials/dashboard_header', $data);
        $this->view('partials/dashboard_sidebar', $data);
        $this->view('pembayaran/index', $data);
        $this->view('partials/dashboard_footer');
    }

    public function bpp(){
        if (!Authentication::getLogged()) {
            Redirect::to("login");
        }


        $data = [
            "title" => 'Pembayaran BPP',
            'user' => Authentication::getUser(),
        ];

        
        $this->view('partials/dashboard_header', $data);
        $this->view('partials/dashboard_sidebar', $data);
        $this->view('pembayaran/bpp', $data);
        $this->view('partials/dashboard_footer');
    }

}
