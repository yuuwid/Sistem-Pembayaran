<?php 

class Authentication {
    

    /*
        Check user logged of not
    */
    public static function getLogged(){

        if (Session::exists('logged')){
            return true;
        } else {
            return false;
        }
    }





    /*
        Get user when logged
    */
    public static function getUser(){
        $data = json_decode(Session::take('logged'), true);

        return $data;
    }
}