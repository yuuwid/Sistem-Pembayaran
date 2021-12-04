<?php

class Pembayaran_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function jenis_pembayaran($kode = null)
    {
        $query = "SELECT * FROM jenis_pembayaran";
        if ($kode != null) {
            $query = $query . " WHERE kode LIKE '{$kode}%'";
        }

        $this->_db->query($query, [], FETCH_MULTI);

        return $this->_db->results();
    }

    public function get_jenis_pembayaran($id)
    {
        $query = "SELECT * FROM jenis_pembayaran WHERE id = {$id}";

        $this->_db->query($query, [], FETCH_SINGLE);

        return $this->_db->results();
    }

    public function transaksi_baru($data)
    {
        $query = "INSERT INTO history_pembayaran (id_user, id_jenis, total_biaya, no_transaksi, status, keterangan) VALUES (:id_user , :id_jenis, :total_biaya, :no_transaksi, :status, :keterangan)";

        $this->_db->query(
            $query,
            [
                ':id_user' => $data['id_user'],
                ':id_jenis' => $data['id_jenis'],
                ':total_biaya' => $data['total_biaya'],
                ':no_transaksi' => $data['no_transaksi'],
                ':status' => $data['status'],
                ':keterangan' => $data['keterangan'],
            ]
        );

        return $this->_db->results();
    }

    public function get_transaksi($key)
    {
        $query = "SELECT * FROM history_pembayaran WHERE no_transaksi = :no_transaksi";

        $this->_db->query(
            $query,
            [
                ':no_transaksi' => $key,
            ]
        );

        return $this->_db->results();
    }


    public function getTransaksiUser($id_user) {
        $query = "SELECT * FROM history_pembayaran WHERE id_user = {$id_user}";
        
        $this->_db->query(
            $query, [], FETCH_MULTI
        );

        return $this->_db->results();
    }
    

    public function updateTransaksi($no_transaksi, $status)
    {
        $query = "UPDATE history_pembayaran SET status = :status WHERE no_transaksi = :no_transaksi";

        $this->_db->query(
            $query,
            [
                ':status' => $status,
                ':no_transaksi' => $no_transaksi,
            ]
        );

        return $this->_db->results();
    }
}
