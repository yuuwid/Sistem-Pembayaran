<?php 

class Input {



    public static function post($options = ['sanitize' => true]){
        $post = [];

        if (!is_null($_POST)){
            foreach ($_POST as $key => $val){
                if ($options['sanitize'] == true){
                    $post[$key] = self::sanitize($val);
                } else {
                    $post[$key] = $val;
                }
            }
        }
        return $post;
    }





    public static function take($item){
		if (isset($_POST[$item])) {
			return self::sanitize($_POST[$item]);
		} else if (isset($_GET[$item])) {
			return self::sanitize($_GET[$item]);
		} else if (isset($_FILES[$item])) {
			return $_FILES[$item];
		} else {
            return '';
        }
    }




    
    private static function sanitize($string){
        return htmlentities($string, ENT_QUOTES, 'UTF-8');
    }
}