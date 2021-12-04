<?php

class ApiTransaksi extends Controller
{

    public function dibayar($no_transaksi){
        return $this->model("Pembayaran_Model") -> updateTransaksi($no_transaksi, TRS_PROCESS);
    }


    public function selesai($no_transaksi){
        return $this->model("Pembayaran_Model") -> updateTransaksi($no_transaksi, TRS_DONE);
    }

    
    public function tolak($no_transaksi){
        return $this->model("Pembayaran_Model") -> updateTransaksi($no_transaksi, TRS_CANCEL);
    }
    
    
    public function batal($no_transaksi){
        return $this->model("Pembayaran_Model") -> updateTransaksi($no_transaksi, TRS_CANCEL);
    }
}