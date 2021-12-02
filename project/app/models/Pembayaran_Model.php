<?php 

class Pembayaran_Model extends Model {

    public function __construct() {
        parent::__construct();
    }


    public function jenis_pembayaran(){
        $query = "SELECT * FROM non_bpp";

        $this->_db->query($query, [], FETCH_MULTI);

        return $this->_db->results();
    }


}