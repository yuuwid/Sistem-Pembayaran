<?php 


class Session {

    public static function exists($name){
        if (isset($_SESSION[$name])){
            return true;
        } else {
            return false;
        }
    }

    public static function make($name, $value){
        return $_SESSION[$name] = $value;
    }

    public static function take($name){
        return $_SESSION[$name];
    }

    public static function drop($name){
        if (self::exists($name)){
            unset($_SESSION[$name]);
        }
    }

    public static function refresh($name, $value = null){
        if (self::exists($name)){
            $session_tmp = self::take($name);
            self::drop($name);
            return $session_tmp;
        } else {
            self::make($name, $value);
        }
    }
}