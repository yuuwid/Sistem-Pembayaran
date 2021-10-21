<?php 


class Flasher {
    /**
     * $_flash = [
     *     name_flash => object Flash
     * ]
     */
    private static $_flash = [];
        

    public static function exists($name) {
        return array_key_exists($name, self::$_flash);
    }

    public static function make($name, $title = '', $msg = '', $style = 'danger', $icon = 'bi-exclamation-triangle-fill'){
        
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
     * Menampilkan Flash dalam bentuk HTML
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