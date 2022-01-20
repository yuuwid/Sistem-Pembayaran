<?php 

class Akun extends Controller implements ControllerInterface {


    private function cekLogin()
    {
        if (!Authentication::getLogged()) {
            Redirect::to("login");
        }
    }

    
    public function index(){
        $this->profile();
    }


    public function profile(){
        $this->cekLogin();
    }


    public function status_pembayaran(){
        $this->cekLogin();

        $user = Authentication::getUser();

        $his_transaksi = $this->model('Pembayaran_Model')->getTransaksiUser($user['id']);
        $jenis_transaksi = [];

        foreach ($his_transaksi as $h){
            $jenis_transaksi[] = $this->model('Pembayaran_Model')->get_jenis_pembayaran_byID($h['id_jenis'])['jenis'];
        }

        $data = [
            "title" => 'Status Pembayaran',
            'user' => $user,
            'transaksi' => $his_transaksi,
            'jenis_transaksi' => $jenis_transaksi,
        ];

        $this->view('partials/main_header', $data);
        $this->view('partials/main_navbar', $data);
        // $this->view('partials/dashboard_header', $data);
        // $this->view('partials/dashboard_sidebar', $data);
        $this->view('akun/status_pembayaran', $data);
        $this->view('partials/dashboard_footer');
        
    }



    public function logout(){
        Session::drop("logged");
        Redirect::to("login");
    }

}