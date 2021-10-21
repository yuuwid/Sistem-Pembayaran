<?php 

class Authentication {
    

    
    public static function getLogged(){

        // if (Cookie::exists(Hash::make('logged_fraisdigital')) && !Authentication::existsDemon()){
        //     $logged = Cookie::take(Hash::make('logged_fraisdigital'));
        //     if (!Session::exists('logged')) {
        //         Session::make('logged', $logged);
        //     }

        //     return true;
        // }

        if (Session::exists('logged')){
            return true;
        } else {
            return false;
        }
    }

    public static function getUser(){
        $json = json_decode(Session::take('logged'), true);

        $data = [
            'id' => 1,
            'status' => 2
        ];

        foreach ($json as $key => $val){
            if (Hash::check('id', $key)){
                $data['id'] = $val;
            } else if (Hash::check('status', $key)){
                $data['status'] = $val;
            } else {
                Redirect::to('auth');
            }
        }

        return $data;
    }

    public static function getLoggedDemon(){

        if (Session::exists('logged') && Authentication::existsDemon()){
            return true;
        } else {
            return false;
        }
    }


    public static function getDemon(){
        return Hash::make('DEMON');
    }

    public static function getDemonRules(){
        return Hash::make('the demon here, no one can enter, only the one choosen');
    }

    
    public static function existsDemon(){
        if (Session::exists(self::getDemon())){
            return true;
        } else {
            return false;
        }
    }
}