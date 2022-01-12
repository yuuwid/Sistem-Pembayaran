<?php 

class Cookie {



    /**
     * Check Cookie
     * @param $name — name Cookie will be checked
     */
    public static function exists($name){
        if (isset($_COOKIE[$name])){
            return true;
        } else {
            return false;
        }
    }





    /**
     * Create Cookie
     * @param string $name — name Cookie will be created
     * @param mixed $value — value of Cookie
     * @param int/const $expiry — expired time Cookie in second
     */
    public static function make($name, $value, $expiry = COOKIE_DEFAULT_EXP){
        if (setcookie($name, $value, time() + $expiry, '/')){
            return true;
        }
        return false;
    }





    /**
     * Take Cookie
     * @param string $name — name Cookie will be take
     */
    public static function take($name){
        return $_COOKIE[$name];
    }





    /**
     * Delete Cookie
     * @param string $name — name Cookie will be destroy/delete
     */
    public static function drop($name){
        self::make($name, '', time()-3600);
    }
}