<?php 

class Date {

    
    
    public static function now($pattern = "d-m-Y h:i:s"){
        return date($pattern);
    }



    public static function tomorrow(){
        $d = strtotime('tomorrow');
        return date($pattern = "d-m-Y h:i:s", $d);
    }



    public static function mktime($d=1, $m=12, $Y=1970, $h=0, $i=0, $s=0, $pattern = "d-m-Y h:i:s"){
        $date = mktime($h, $i, $s, $m, $d, $Y);
        return date($date, $pattern);
    }



    public static function year(){
        return Date::now('Y');
    }



    public static function month(){
        return Date::now('F');
    }


    public static function rangeMonth($range){
        $month = [];
        for ($i=0; $i <= $range; $i++) { 
            $month[] = date('F Y', strtotime("+{$i} month", strtotime(Date::now())));
        }
        return $month;
    }



    public static function day(){
        return Date::now('d');
    }

}