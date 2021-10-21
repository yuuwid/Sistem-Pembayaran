<?php
class Generate
{


	public static function rupiah($num)
	{
		$num = self::cleanInt($num);
		return number_format($num, 0, ',', '.');
	}

	public static function countDiscount($price, $discount)
	{
		$price = self::cleanInt($price);
		$discount = self::cleanInt($discount);
		return $price - ($price * $discount) / 100;
	}

	public static function discount($price, $discount)
	{
		$price = self::cleanInt($price);
		$discount = self::cleanInt($discount);
		return ($price * $discount) / 100;
	}
	

	public static function cleanInt($str){
        return preg_replace('/[^0-9]/', '', $str);
	}


	public static function slugify($string)
	{
		$slug = preg_replace('~[^\pL\d]+~u', '-', $string);
		$slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
		$slug = preg_replace('~[^-\w]+~', '', $slug);
		$slug = trim($slug, '-');
		$slug = preg_replace('~-+~', '-', $slug);
		$slug = strtolower($slug);

		return $slug;
	}

	public static function reslug($slug)
	{
		$string = str_replace('-', ' ', $slug);
		$string = ucwords($string);
		return $string;
	}


}
