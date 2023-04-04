<?php

namespace App\MyHelpers;

use voku\helper\ASCII;

class AppHelper
{
	public static function prelNumar($numar)
	{
		$numar = strtoupper($numar);
		$start = 0;
		$stop = 0;

		$length = strlen($numar);
		for ($index = 0; $index < $length; $index++) {
			//inlocuieste orice caracter 
			if ((ord($numar[$index]) < 48) || (ord($numar[$index]) > 90) || ((ord($numar[$index]) > 57) && (ord($numar[$index]) < 65))) $numar[$index] = "-";
		}
		$numar= str_replace("-", "", $numar);
		$length = strlen($numar);
		for ($index = 0; $index < $length; $index++) {
			if (($start == 0) && ((ord($numar[$index]) < 57) && (ord($numar[$index]) > 48))) $start = $index;
			if (($start > 0) && ($stop == 0) && ((ord($numar[$index]) > 57) || (ord($numar[$index]) < 48))) $stop = $index;

			echo $numar[$index], ord($numar[$index]);
			echo "<br>";
		}
		dd($start, $stop);
		if (substr_count($numar, "-") > 0) {
			return $numar;
		}
		return 'ok';
	}
	public static function instance()
	{
		return new AppHelper();
	}
}
