<?php 

class Hash {

    public const SHA256 = 'sha256';

    public static function make($string, $type = DEFAULT_HASH, $algo = Hash::SHA256){
        if($type = DEFAULT_HASH){
            return hash($algo, $string);
        } else if ($type = PASSWORD_HASH){
            return password_hash($string, PASSWORD_BCRYPT);
        }
    }




    
    public static function check($string, $hash, $type = DEFAULT_HASH, $algo = Hash::SHA256){
        if ($type == DEFAULT_HASH){
            if ( $hash == self::make($string, $type, $algo) ) {
                return true;
            } else {
                return false;
            }
        } else if ($type == PASSWORD_HASH){
            return password_verify($string, $hash);
        }
    }
}