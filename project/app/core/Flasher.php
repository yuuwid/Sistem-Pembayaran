<?php 


class Flasher {
    
    /**
     * --- ICON FLASHER ---
     * 
     * EXCLAMATION -> !
     * CHECK -> v
     * DASH -> -
     * X -> x
     */
    public const DEFAULT = 'bi-exclamation';

    public const EXCLAMATION = 'bi-exclamation';    
    public const EXCLAMATION_CIRCLE = 'bi-exclamation-circle';
    public const EXCLAMATION_CIRCLE_FILL = 'bi-exclamation-circle-fill';
    public const EXCLAMATION_DIAMOND = 'bi-exclamation-diamond';
    public const EXCLAMATION_DIAMOND_FILL = 'bi-exclamation-diamond-fill';
    public const EXCLAMATION_OCTAGON = 'bi-exclamation-octagon';
    public const EXCLAMATION_OCTAGON_FILL = 'bi-exclamation-octagon-fill';
    public const EXCLAMATION_SQUARE = 'bi-exclamation-square';
    public const EXCLAMATION_SQUARE_FILL = 'bi-exclamation-square-fill';
    public const EXCLAMATION_TRIANGLE = 'bi-exclamation-triangle';
    public const EXCLAMATION_TRIANGLE_FILL = 'bi-exclamation-triangle-fill';
    public const EXCLAMATION_SHIELD = 'bi-shield-exclamation';
    public const EXCLAMATION_SHIELD_FILL = 'bi-shield-fill-exclamation';


    public const CHECK = 'bi-check';
    public const CHECK_CIRCLE = 'bi-check-circle';
    public const CHECK_CIRCLE_FILL = 'bi-check-circle-fill';
    public const CHECK_SQUARE = 'bi-check-square';
    public const CHECK_SQUARE_FILL = 'bi-check-square-fill';


    public const DASH = 'bi-dash';
    public const DASH_CIRCLE = 'bi-dash-circle';
    public const DASH_CIRCLE_FILL = 'bi-dash-circle-fill';
    public const DASH_SQUARE = 'bi-dash-square';
    public const DASH_SQUARE_FILL = 'bi-dash-square-fill';


    public const X = 'bi-x';
    public const X_CIRCLE = 'bi-x-circle';
    public const X_CIRCLE_FILL = 'bi-x-circle-fill';
    public const X_SQUARE = 'bi-x-square';
    public const X_SQUARE_FILL = 'bi-x-square-fill';
    public const X_OCTAGON = 'bi-x-octagon';
    public const X_OCTAGON_FILL = 'bi-x-octagon-fill';



    /**
     * --- STYLING ---
     */
    public const PRIMARY = 'primary';
    public const SECONDARY = 'secondary';
    public const SUCCESS = 'success';
    public const INFO = 'info';
    public const WARNING = 'warning';
    public const DANGER = 'danger';
    public const LIGHT = 'light';
    public const DARK = 'dark';



    /**
     * $_flash = [
     *     name_flash => object Flash
     * ]
     */
    private static $_flash = [];
        


    public static function exists($name) {
        return array_key_exists($name, self::$_flash);
    }




    
    public static function make($name, $title = '', $msg = '', $style = Flasher::DANGER, $icon = Flasher::DEFAULT){
        
        self::$_flash[$name] = [
            'title' => $title,
            'msg' => $msg,
            'style' => $style,
            'icon' => $icon,
        ];

    }





    public static function take($name) {
        return self::$_flash[$name];
    }

    



    public static function drop($name) {
        unset(self::$_flash[$name]);
    }





    /**
     * Show Flasher in HTML
     */
    public static function show($name) {
        $flash = self::$_flash[$name];

        $html =
        '
        <div class="alert alert-' . $flash['style'] . ' d-flex align-items-center alert-dismissible fade show" role="alert">
            <i class="bi ' . $flash['icon'] . ' bi-xlg pe-3"></i>
            <div>
                <strong>' . $flash['title'] . '</strong> ' . $flash['msg'] . '
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
        return $html;
    }






    public static function showndrop($name) {
        if (self::exists($name)){
            $html = self::show($name);
            self::drop($name);
            return $html;
        }
    }

}