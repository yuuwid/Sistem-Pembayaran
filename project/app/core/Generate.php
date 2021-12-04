<?php
class Generate {



	public static function rupiah($num){
		$num = self::cleanInt($num);

		return number_format($num, 0, ',', '.');
	}

	



	public static function cleanInt($str){
        return preg_replace('/[^0-9]/', '', $str);
	}





	public static function slugify($string){
		$slug = preg_replace('~[^\pL\d]+~u', '-', $string);
		$slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
		$slug = preg_replace('~[^-\w]+~', '', $slug);
		$slug = trim($slug, '-');
		$slug = preg_replace('~-+~', '-', $slug);
		$slug = strtolower($slug);

		return $slug;
	}





	public static function reslug($slug){
		$string = str_replace('-', ' ', $slug);
		$string = ucwords($string);
		return $string;
	}
    /**
     * @param int $length — Length Number
     * @param bool $uniq — Unique Number
     */



	 
    public static function id($length = 8, $uniq = false){
        return 1;
    }



	public const DEFAULT = 2;
	public const HEX = 3;

    
    public static function token($length = 8, $algo = self::DEFAULT){
		if ($algo == self::DEFAULT){
			return random_int(1, $length) . random_int(0, $length) . random_int(0, $length);
		} else {
			return bin2hex(random_bytes($length));
		}
    }


	public static function statusClean($status) {
		switch ($status) {
			case TRS_WAIT:
				return "Menunggu";
				break;
			case TRS_PENDING:
				return "Pending";
				break;
			case TRS_PROCESS:
				return "Diproses";
				break;
			case TRS_SEND:
				return "Dikirim";
				break;
			case TRS_DONE:
				return "Selesai";
				break;
			case TRS_CANCEL:
				return "Dibatalkan";
				break;
			default:
				return "?";
		}
	}
}
