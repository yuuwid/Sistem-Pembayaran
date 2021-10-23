<?php 

class Generator {



    /**
     * @param int $length — Length Number
     * @param bool $uniq — Unique Number
     */
    public static function id($length = 8, $uniq = false){
        return 1;
    }




    
    public static function token($length = 16){
        return bin2hex(random_bytes($length));
    }

}
