<?php

namespace App\MyHelpers;
class AppHelper
{
	public static function prelucrare_numar_masina($numar)
	{
		//face toate literele mari
		$numar = strtoupper($numar);

		//pentru a recompune la final numarul e nevoie de doua repere (inceputul si sfarsitul cifrelor)
		$start = 0;
		$stop = 0;

		$length = strlen($numar);
		for ($index = 0; $index < $length; $index++) {
			//inlocuieste orice caracter care nu este cifra sau litera din alfabet cu -
			if ((ord($numar[$index]) < 48) || (ord($numar[$index]) > 90) || ((ord($numar[$index]) > 57) && (ord($numar[$index]) < 65))) $numar[$index] = "-";
		}

		//sterge caracterele - pentru a uniformiza denumirea masinii care trebuie in final sa fie x-y-z (ex. B-47-KMH)
		$numar= str_replace("-", "", $numar);
		$length = strlen($numar);
		for ($index = 0; $index < $length; $index++) {
			if (($start == 0) && ((ord($numar[$index]) < 58) && (ord($numar[$index]) > 47))) $start = $index;
			if (($start > 0) && ($stop == 0) && ((ord($numar[$index]) > 57) || (ord($numar[$index]) < 48))) $stop = $index;
		}
		$last = substr($numar, $stop);
		$first = substr($numar, 0, $start);
		$middle = substr($numar, $start, $stop-$start);
		return $first . "-" . $middle . "-" . $last;
	}
}
