<?php 


class Text {

    

    public static function lower($str){
        return strtolower($str);
    }





    public static function pascal($str){
        return strtoupper($str);
    }





    public static function capEach($str, $option = "\t\r\n\f\v"){
        return ucwords($str, $option);
    }
}