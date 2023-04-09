<?php

namespace App\MyHelpers;

use App\Models\Month;
use App\Models\Interval;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AppHelper
{
	public static function get_last_target_values_array($source_id, $target_id, $pivot_table_name)
	{
		$selectedMonth = Month::where('select', 1)->first();
		$selectedInterval = Interval::where('month_id', $selectedMonth->id)->where('select', 1)->first();

		$sql = " DISTINCT $source_id, LAST_VALUE($target_id) OVER (PARTITION BY $source_id ORDER BY interval_id RANGE BETWEEN UNBOUNDED PRECEDING AND UNBOUNDED FOLLOWING ) last_id";
		$res = DB::table($pivot_table_name)
			->selectRaw($sql)
			->where('interval_id', '<=', $selectedInterval->id)
			->get();
		$results = json_decode($res, true);

		$array_ids = [];
		foreach ($results as $key => $result) {
			$array_ids[$result[$source_id]] = $result['last_id'];
		}
		return  $array_ids;
	}
	
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
		$numar = str_replace("-", "", $numar);
		$length = strlen($numar);
		for ($index = 0; $index < $length; $index++) {
			if (($start == 0) && ((ord($numar[$index]) < 58) && (ord($numar[$index]) > 47))) $start = $index;
			if (($start > 0) && ($stop == 0) && ((ord($numar[$index]) > 57) || (ord($numar[$index]) < 48))) $stop = $index;
		}
		$last = substr($numar, $stop);
		$first = substr($numar, 0, $start);
		$middle = substr($numar, $start, $stop - $start);
		return $first . "-" . $middle . "-" . $last;
	}
}
