<?php 

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }


    public function login($data){
        $query = "SELECT * FROM mahasiswa WHERE (npm = :npm OR email = :email) AND password = :password";

        $this->_db->query($query, [
            ':npm' => $data['akun'],
            ':email' => $data['akun'],
            ':password' => Hash::make($data['password'], PASSWORD_HASH),
        ], FETCH_SINGLE );

        return $this->_db->results();
    }


}