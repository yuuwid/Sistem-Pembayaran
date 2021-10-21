<?php 

class Cookie {

    /**
     * cek cookie
     * @param $name — nama cookie
     */
    public static function exists($name){
        if (isset($_COOKIE[$name])){
            return true;
        } else {
            return false;
        }
    }

    /**
     * buat cookie
     * @param string $name — nama cookie
     * @param mixed $value — isi dari cookie
     * @param int/const $expiry — batas expired cookie dalam detik
     */
    public static function make($name, $value, $expiry = COOKIE_DEFAULT_EXP){
        if (setcookie($name, $value, time()+$expiry, '/')){
            return true;
        }
        return false;
    }

    /**
     * ambil cookie
     * @param string $name — nama cookie
     */
    public static function take($name){
        return $_COOKIE[$name];
    }

    /**
     * hapus cookie
     * @param string $name — nama cookie
     */
    public static function drop($name){
        self::make($name, '', time()-3600);
    }
}