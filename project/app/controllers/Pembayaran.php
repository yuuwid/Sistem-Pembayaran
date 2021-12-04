<?php

class Pembayaran extends Controller implements ControllerInterface
{

    private function cekLogin()
    {
        if (!Authentication::getLogged()) {
            Redirect::to("login");
        }
    }


    public function index()
    {
        $this->cekLogin();

        $data = [
            "title" => 'Sistem Pembayaran',
            'user' => Authentication::getUser(),
        ];


        $this->view('partials/dashboard_header', $data);
        $this->view('partials/dashboard_sidebar', $data);
        $this->view('pembayaran/index', $data);
        $this->view('partials/dashboard_footer');
    }

    public function bpp()
    {
        $this->cekLogin();

        $jenis_pembayaran = $this->model('Pembayaran_Model')->jenis_pembayaran('BPP');

        $token = Generate::token();
        Cookie::make("secured-token", $token, );

        $data = [
            "title" => 'Pembayaran BPP',
            'user' => Authentication::getUser(),
            'month' => Date::rangeMonth(6),
            'jenis_pembayaran' => $jenis_pembayaran,
            'token' => $token,
        ];


        $this->view('partials/dashboard_header', $data);
        $this->view('partials/dashboard_sidebar', $data);
        $this->view('pembayaran/bpp', $data);
        $this->view('partials/dashboard_footer');
    }

    public function nonbpp()
    {
        $this->cekLogin();

        $jenis_pembayaran = $this->model('Pembayaran_Model')->jenis_pembayaran('NONBPP');

        $token = Generate::token();
        Cookie::make("secured-token", $token, );
        
        $data = [
            "title" => 'Pembayaran Non-BPP',
            'user' => Authentication::getUser(),
            'jenis_pembayaran' => $jenis_pembayaran,
            'token' => $token,
        ];


        $this->view('partials/dashboard_header', $data);
        $this->view('partials/dashboard_sidebar', $data);
        $this->view('pembayaran/nonbpp', $data);
        $this->view('partials/dashboard_footer');
    }

    public function securedpaymentbpp(){
        $this->cekLogin();

        $data = Input::post();
        
        $data['status'] = TRS_WAIT;
        $data['keterangan'] = $data['keterangan'];

        $kode_transaksi = $data['token'] . '-' . str_replace('.', '', $data['npm']) . '-' . $data['id_user'];

        $this->createOrder($data, $kode_transaksi);
    }

    public function securedpaymentnonbpp(){
        $this->cekLogin();

        $data = Input::post();
        
        $data['status'] = TRS_WAIT;
        $data['keterangan'] = '';

        $kode_transaksi = $data['token'] . '-' . str_replace('.', '', $data['npm']) . '-' . $data['id_jenis'] . '-' . $data['id_user'];

        $this->createOrder($data, $kode_transaksi);
    }

    private function createOrder($data, $kode_transaksi){     
        if (!Cookie::exists('secured-token')){
            PopUp::alert('Expired', "Terlalu Lama di Halaman ini");
        } else {
            $token = explode('-', $kode_transaksi)[0];
            $data['no_transaksi'] = $kode_transaksi;
            $data['total_biaya'] = $this->model('Pembayaran_Model')->get_jenis_pembayaran($data['id_jenis'])['biaya'];
            if (Cookie::take('secured-token') == $token){                
                $this->model('Pembayaran_Model')->transaksi_baru($data);
                Cookie::make('secured-token', 0, );
            }
            $this->bayar($data, $kode_transaksi);
        }
    }

    private function bayar($reqData, $kode_transaksi){
        $pembayaran = $this->model('Pembayaran_Model')->get_transaksi($kode_transaksi);

        $data = [
            "title" => 'Transaksi',
            'user' => Authentication::getUser(),
            'jenis_tr' => $this->model('Pembayaran_Model')->get_jenis_pembayaran($pembayaran['id_jenis']),
            'total_biaya' => $reqData['total_biaya'],
            'pembayaran' => $pembayaran,
            'va' => (explode('-', $pembayaran['no_transaksi'])[0]) . 9 . (explode('-', $pembayaran['no_transaksi'])[1]),
            'status' => Generate::statusClean($pembayaran['status']),
        ];

        $this->view('partials/main_header', $data);
        $this->view('partials/main_navbar', $data);
        $this->view('pembayaran/transaksi', $data);
        $this->view('partials/footer');
    }

    
    public function transaksi($kode_transaksi){
        $this->cekLogin();
        $user = Authentication::getUser();
        $pembayaran = $this->model('Pembayaran_Model')->get_transaksi($kode_transaksi[2]);
        
        $data = [
            "title" => 'Transaksi',
            'user' => $user,
            'jenis_tr' => $this->model('Pembayaran_Model')->get_jenis_pembayaran($pembayaran['id_jenis']),
            'total_biaya' => $pembayaran['total_biaya'],
            'pembayaran' => $pembayaran,
            'va' => (explode('-', $pembayaran['no_transaksi'])[0]) . 9 . (explode('-', $pembayaran['no_transaksi'])[1]),
            'status' => Generate::statusClean($pembayaran['status']),
        ];

        $this->view('partials/main_header', $data);
        $this->view('partials/main_navbar', $data);
        $this->view('pembayaran/transaksi', $data);
        $this->view('partials/footer');
    }
}
