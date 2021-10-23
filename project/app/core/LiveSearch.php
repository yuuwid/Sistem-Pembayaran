<?php

use Mpdf\Tag\Dd;

class LiveSearch {

    private $_db;

    public const WITH_PICTURE = 231;
    public const DEFAULT_SEARCH = 321;



    public function __construct()
    {
        $this->_db = Database::instance();
    }





    /**
     * @param mixed $data string query or array assoc
     */
    public function search($data = [], $option = self::WITH_PICTURE){

        if ($data != []){
            $this->database($data, $option);
        } else {
            $this->statis($data, $option);
        }
    }





    public function statis($data, $option){
        $ss = $_GET['url'];
        $ss = explode('/', $ss);
        $ss = $ss[array_key_last($ss)];

        
        if (isset($ss)) {
            foreach ($data as $key => $val){
                if (preg_match('/'.$ss.'/', $key)){

                }
            }
        }

    }





    public function database($query, $option){
        // DEVELOP
    }
}
