<?php 

/**
 * JAVASCRIPT Pop Up
 */
class PopUp {

// .alert {
//   padding: 20px;
//   background-color: #f44336;
//   color: white;
// }

// .closebtn {
//   margin-left: 15px;
//   color: white;
//   font-weight: bold;
//   float: right;
//   font-size: 22px;
//   line-height: 20px;
//   cursor: pointer;
//   transition: 0.3s;
// }

// .closebtn:hover {
//   color: black;
// }

    private static $style = '<div style="
    padding: 20px; background-color: color; color: white;">
      <span class="closebtn" style="margin-left: 15px; color: white; font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer; transition: 0.3s" onclick="this.parentElement.style.display="none";">&times;</span> 
      <strong>{title}</strong> {msg}.
    </div>';

    public static function alert($title, $msg){
        $html = str_replace('{title}', $title, self::$style);
        $html = str_replace('{msg}', $msg, self::$style);
        echo $html;
        Redirect::to(404);
    }

}
