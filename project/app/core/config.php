<?php 

// constanta folder App
define('APP_ROOT', dirname(__FILE__));
// Url
define('URL', 'http://localhost/phpmvc/Sistem%20Pembayaran');
// constanta folder public
define('PUBLIC_URL', URL.'/public');

define('PUBLIC_ROOT', dirname(str_replace('app', 'public', __DIR__)));
// Url Upload File
define('UPLOAD_ROOT', PUBLIC_URL.'/images');
// Base App
define('BASE_APP', 'Login');


// Config Database
define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sistem_pembayaran');


// File Require Config
/**
 * FILE_SIZE_BYTE = 1 MB
 */
define('FILE_SIZE_BYTE', 1048576);
define('FILE_MAX_SIZE_BYTE', 4 * FILE_SIZE_BYTE);
define('FILE_MAX_SIZE_MB', 4);
define('FILE_EXT', [
    'jpg', 
    'jpeg', 
    'png'
]);



// cookie default
define('COOKIE_DEFAULT_EXP', 7 * 86400);

// Database const
define('FETCH_SINGLE', 20);
define('FETCH_MULTI', 24);


// Hash const
define('DEFAULT_HASH', 231);
define('PASSWORD_HASH', 436);


// Transaction const
define('TRS_PENDING', 0);
define('TRS_PROCESS', 4);
define('TRS_SEND', 3);
define('TRS_DONE', 1);
define('TRS_WAIT', 9);
define('TRS_CANCEL', -1);