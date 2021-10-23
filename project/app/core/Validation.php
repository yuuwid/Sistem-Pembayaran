<?php 


// DEVELOP

class Validation {



	public static function unique($value, $fieldName, $tableName){
		$db = Database::instance();
		$result = $db->query(
			"SELECT count(*) AS 'count' FROM {$tableName} WHERE {$fieldName}=? ", 
			[$value]
		);

		return !boolval($result->first()->count);
	}





	public static function text($text, $minLength, $maxLength){
		if (strlen($text) < $minLength || strlen($text) > $maxLength){
			return false;
		} else {
			return true;
		}
	}

}