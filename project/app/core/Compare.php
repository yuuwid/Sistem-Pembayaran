<?php

/*
    Compare 2 value of Time or DateTime
*/
class Compare {

    public const DEFAULT_COMPARE = 232;
    public const MID_COMPARE = 513;
    public const HIGH_COMPARE = 232;


    
    /**
     * Compare two date
     * @param mixed $date1 — Date 1
     * @param mixed $date2 — Date 2
     * @param const Algorithm Compare — DEFAULT_COMPARE, MID_COMPARE, HIGH_COMPARE
     * 
     * @return true if date1 > date2
     */
    public static function date($date1, $date2, $option = Compare::DEFAULT_COMPARE)
    {

        switch ($option) {
            case Compare::DEFAULT_COMPARE:
                return Compare::defaulted($date1, $date2);

            case Compare::MID_COMPARE:
                return Compare::mid($date1, $date2);

            case Compare::HIGH_COMPARE:
                return Compare::high($date1, $date2);

            default :
                return Compare::defaulted($date1, $date2);

        }
    }





    private static function defaulted($date1, $date2)
    {
        if ($date1 > $date2) {
            return true;
        } else {
            return false;
        }
    }





    private static function mid($date1, $date2)
    {
        $dateTimestamp1 = strtotime($date1);
        $dateTimestamp2 = strtotime($date2);
        if ($dateTimestamp1 > $dateTimestamp2) {
            return true;
        } else {
            return false;
        }
    }




    
    private static function high($date1, $date2)
    {
        $date1 = new DateTime($date1);
        $date2 = new DateTime($date2);
        if ($date1 > $date2) {
            return true;
        } else {
            return false;
        }
    }
}
