<?php 

require_once 'config.php';

class App {
    private $_controller = BASE_APP;
    private $_method = 'index';
    private $_params = [];

    public function __construct(){
        
        if (!$url = $this->getUrl()){
            $url = [$this->_controller];
        }

        if ( file_exists( '../app/controllers/'. $url[0] . '.php') ){
            $this->_controller = $url[0];
            unset($url[0]);
        } else {
            $this->_controller = 'NotFound';
        }

        require_once '../app/controllers/' . $this->_controller . '.php';

        $this->_controller = new $this->_controller;

        if ( isset( $url[1] ) ){
            if( method_exists( $this->_controller, $url[1] ) ){
                $this->_method = $url[1];
                unset($url[1]);
            } else {
                $this->_method = 'notfound';
            }
        }

        $this->_params = ($url) ? [$url] : [];
        
        call_user_func_array([$this->_controller, $this->_method], $this->_params);
    }

    private function getUrl(){
        if (isset($_GET["url"])){
            $url = rtrim($_GET["url"], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}