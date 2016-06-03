<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('gen_url_name')){
	function gen_url_name($name)
	{
		$name = str_replace("à", "a", $name);
		$name = str_replace("è", "e", $name);
		$name = str_replace("à", "a", $name);
		$name = str_replace("ì", "i", $name);
		$name = str_replace("ù", "u", $name);
		$name = str_replace(" ", "-", $name);

		return strtolower($name);
	 }
}

if(!function_exists('getDatetime')){
	function getDatetime()
	{
		return date("Y-m-d H:i:s");
	}
}