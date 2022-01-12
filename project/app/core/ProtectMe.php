<?php 


// DEVELOP

class ProtectMe {
    private static $token = "";


    public static function make(){
        $temp_token = bin2hex(random_bytes(16));
        Session::make("form-token", $temp_token);
        self::$token = $temp_token;
    }

    public static function check(){
        if (Session::take("form-token") == self::$token) {
            Session::drop("form-token");
            return true;
        } else {
            Session::drop("form-token");
            Redirect::to("error");
        }
    }


}