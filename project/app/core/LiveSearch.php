<?php

use Mpdf\Tag\Dd;

class LiveSearch
{
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
        $ss = $_GET['url'];
        $ss = explode('/', $ss);
        $ss = $ss[array_key_last($ss)];


        if (isset($ss)) {
            $stmt = $this->_db->query(
                $query, [ 'key' => $ss.'%', ], FETCH_MULTI
            );

            $results = $stmt->results();
            
            if (sizeof($results) > 0) {
                foreach ($results as $rs) {
                    if ($option == self::WITH_PICTURE){
                        $picture = json_decode($rs['pictures'], true)[0];
                        $html = '
                        <div class="card">
                                <a href="shop/product/'.$rs['slug'].'" class=" row row-cols-2 p-2 d-flex link link-img">
                                    <div class="col col-3 col-md-2 col-lg-2 col-xxl-1 align-self-center">
                                        <img src="'.PUBLIC_URL.'/images/products/'. $picture .'" width="100%">
                                    </div>
                                    <div class="col align-self-center w-75">
                                        <div class="d-flex align-content-center flex-wrap ms-3">
                                            '. $rs['name'] .'
                                        </div>
                                    </div>
                                </a> 
                            </div>';
                    } else {
                        $html = '
                            <div class="card">
                                <a href="shop/product/'.$rs['slug'].'" class="p-2 d-flex link">
                                    <div class="align-self-center w-75">
                                        <div class="d-flex align-content-center flex-wrap ms-3">
                                            '. $rs['name'] .'
                                        </div>
                                    </div>
                                </a> 
                            </div>';
                    }
                    echo $html;
                }
            } else {
                $html =
                '
                <div class="">
                    <div class="d-flex align-content-center flex-wrap ms-3 p-2">
                        Tidak ada hasil pencarian.
                    </div>
                </div>
                ';
                echo $html;
            }
        }

    }
}
