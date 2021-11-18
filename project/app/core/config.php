<?php 





/*
    URL APP / WEBSITE
    if use local webserver, fill URL by name folder app
*/
define('URL', 'http://localhost:8080/phpmvc/Sistem-Pembayaran/project');





/* 
    CONST APP FOLDER
    may not always be accessed 
    let the system access
*/
define('APP_ROOT', dirname(__FILE__));





/* 
    CONST PUBLIC URL
    use this const to access public folder like assets or images
*/
define('PUBLIC_URL', URL.'/public');
define('PUBLIC_ROOT', dirname(str_replace('app', 'public', __DIR__)));





// Url Upload File [DEMO]
define('UPLOAD_ROOT', PUBLIC_ROOT.'/images');





/*
    BASE APP
    when the app/website accessed, 
    first will be show in app is a defined in this const

    The defined value is a controller already created in APP/CONTROLLERS

    DEFAULT IS "Home" Controller
*/
define('BASE_APP', 'Login');





/*
    Configuration Database
    HOST -> host name of webserver
    PORT -> port of webserver
    USER -> username of client database
    PASSWORD -> password of client database
    DATABASE NAME -> name of database will be used
*/
define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sistem_pembayaran');





/**
    File Require Config for uploaded file
    FILE_SIZE_BYTE = 1 MB
    FILE_MAX_SIZE_BYTE = 4 MB
    FILE_EXT supported = JPG, JPEG, and PNG
 */
define('FILE_SIZE_BYTE', 1048576);
define('FILE_MAX_SIZE_BYTE', 4 * FILE_SIZE_BYTE);
define('FILE_MAX_SIZE_MB', 4);
define('FILE_EXT', [
    'jpg', 
    'jpeg', 
    'png'
]);





/* 
    COOKIE DEFAULT EXPIRED IS 7 DAY
*/
define('COOKIE_DEFAULT_EXP', 7 * 86400);





/*
    KEY for REMEMBER ME feature
    the key will be convert to COOKIE
*/
define('KEY_REMEMBER_ME', 'logged');





/*
    DATABASE FETCH DATA AFTER QUERY
    SINGLE -> only 1 data
    MULTI -> more than 1 data
*/
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