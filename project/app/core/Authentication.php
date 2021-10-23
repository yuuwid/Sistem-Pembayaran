<?php 

class Authentication {
    

    /*
        Check user logged of not
    */
    public static function getLogged(){

        if (Cookie::exists(Hash::make(KEY_REMEMBER_ME)) && !Authentication::existsDemon()){
            $logged = Cookie::take(Hash::make(KEY_REMEMBER_ME));
            if (!Session::exists('logged')) {
                Session::make('logged', $logged);
            }

            return true;
        }

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
        $json = json_decode(Session::take('logged'), true);

        $data = [
            'id' => 0,
            'status' => 0
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
}