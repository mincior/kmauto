<?php

namespace App\MyHelpers;

use App\Models\Month;
use App\Models\Interval;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AppHelper
{
	/**
	 * Returneaza un array de id-uri sursa 
	 * pentru ultima valoare a id-urilor target a intervalului selectat
	 * Daca primeste si un filtru de tip Sql il executa.
	 * @param [type] $source_id
	 * @param [type] $target_id
	 * @param [type] $pivot_table_name
	 * @param [type] $selectedInterval
	 * @param string $whereRaw
	 * @return void
	 */
	public static function get_last_target_values_array($source_id, $target_id, $pivot_table_name, $selectedInterval, $whereRaw = '' )
	{

		$sql = " DISTINCT $source_id, LAST_VALUE($target_id) OVER (PARTITION BY $source_id ORDER BY interval_id RANGE BETWEEN UNBOUNDED PRECEDING AND UNBOUNDED FOLLOWING ) last_id";
		$res = DB::table($pivot_table_name)
			->selectRaw($sql);
		if ($whereRaw){
			$res = $res->whereRaw($whereRaw);
		}
		$res = $res->where('interval_id', '<=', $selectedInterval)
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

	public static function leadzero($val, $poz){
		for ($i = 0; $i< ($poz - strlen($val)) ; $i++){
			$val = '0' . $val;
		}
		return $val;
	}
}
