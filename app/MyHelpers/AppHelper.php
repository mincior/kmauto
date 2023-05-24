<?php

namespace App\MyHelpers;

use Exception;
use App\Models\Kmlog;
use App\Models\Month;
use App\Models\Interval;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App\Http\Requests\KmlogStoreOrUpdateRequest;

class AppHelper
{
	/**
	 * Returneaza un array de id-uri sursa 
	 * pentru ultima valoare a id-urilor target a intervalului selectat
	 * Daca primeste si un filtru de tip Sql il executa.
	 * @param [type] $source_id
	 * @param [type] $target_id
	 * @param [type] $pivot_table_name
	 * @param [type] $selected_interval_id
	 * @param string $whereRaw
	 * @return array
	 */
	public static function get_last_target_values_array($source_id, $target_id, $pivot_table_name, $selected_interval_id, $whereRaw = '')
	{

		$sql = " DISTINCT $source_id, LAST_VALUE($target_id) OVER (PARTITION BY $source_id ORDER BY interval_id RANGE BETWEEN UNBOUNDED PRECEDING AND UNBOUNDED FOLLOWING ) last_id";
		$res = DB::table($pivot_table_name)
			->selectRaw($sql);
		if ($whereRaw) {
			$res = $res->whereRaw($whereRaw);
		}
		$res = $res->where('interval_id', '<=', $selected_interval_id)
			->get();
		$results = json_decode($res, true);

		$array_ids = [];
		foreach ($results as $key => $result) {
			$array_ids[$result[$source_id]] = $result['last_id'];
		}
		return  $array_ids;
	}

	/**
	 * Create a thumbnail of specified size
	 *
	 * @param string $path path of thumbnail
	 * @param int $width
	 * @param int $height
	 */
	public static function createThumbnail($path, $width, $height)
	{
		try {
			$img = @Image::make($path)->resize($width, $height, function ($constraint) {
				$constraint->aspectRatio();
			});
			$img->save($path);
		} catch (Exception $e) {
		}
	}

	public static function prelPicture($file, $last_part_image_path)
	{
		//pregateste calea pentru poze
		//get filename with extension
		$filenamewithextension = $file->getClientOriginalName();

		//get filename without extension
		$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

		//get file extension
		$extension = $file->getClientOriginalExtension();

		$time = time();

		//filename to store
		$file_name_to_store = $filename . '_' . $time . '.' . $extension;

		//small thumbnail name
		$small_thumbnail = $filename . '_small_' . $time . '.' . $extension;

		//medium thumbnail name
		$medium_thumbnail = $filename . '_medium_' . $time . '.' . $extension;

		//large thumbnail name
		$large_thumbnail = $filename . '_large_' . $time . '.' . $extension;

		//Upload File
		$file->storeAs('public/pictures' . $last_part_image_path, $file_name_to_store);
		$file->storeAs('public/pictures/thumbnail' . $last_part_image_path, $small_thumbnail);
		$file->storeAs('public/pictures/thumbnail' . $last_part_image_path, $medium_thumbnail);
		$file->storeAs('public/pictures/thumbnail' . $last_part_image_path, $large_thumbnail);

		$file_name_to_store_path =  public_path('storage/pictures' . $last_part_image_path . '/' . $file_name_to_store);
		self::createThumbnail($file_name_to_store_path, 1020, 760);
		//create small thumbnail
		$small_thumbnail_path = public_path('storage/pictures/thumbnail' . $last_part_image_path . '/' . $small_thumbnail);
		self::createThumbnail($small_thumbnail_path, 150, 93);

		//create medium thumbnail
		$medium_thumbnail_path = public_path('storage/pictures/thumbnail' . $last_part_image_path . '/' . $medium_thumbnail);
		self::createThumbnail($medium_thumbnail_path, 300, 185);

		//create large thumbnail
		$large_thumbnail_path = public_path('storage/pictures/thumbnail' . $last_part_image_path . '/' . $large_thumbnail);
		self::createThumbnail($large_thumbnail_path, 550, 340);
		return   $last_part_image_path  . "/" . $file_name_to_store;
	}
	
	/**
	 * Muta elementul element in directia sens in barr si returneaza barr
	 *
	 * @param [type] $arr
	 * @param [type] $element
	 * @param [type] $sens
	 * @return array
	 */
	public static function arr_move($arr, $element, $sens)
	{
		$barr = [];

		//ia pe rand elementele mai putin ultimul
		if ($sens == "up") {
			for ($k = 0; $k < count($arr) - 1; $k++) {
				if ($arr[$k + 1] == $element) {
					$barr[$k] = $element;
				} elseif ($arr[$k] == $element) {
					$barr[$k] = $arr[$k - 1];
				} else {
					$barr[$k] = $arr[$k];
				}
			}

			//prelucreaza si pe ultimul ($k vine de mai sus)
			if ($arr[$k] == $element) {
				$barr[$k] = $arr[$k - 1];
			} else {
				$barr[$k] = $arr[$k];
			}
		} else { //sens = 'down
			for ($k =  count($arr) - 1; $k > 0; $k--) {
				if ($arr[$k - 1] == $element) {
					$barr[$k] = $element;
				} elseif ($arr[$k] == $element) {
					$barr[$k] = $arr[$k + 1];
				} else {
					$barr[$k] = $arr[$k];
				}
			}

			//prelucreaza si pe primul ($k vine de mai sus si este zero)
			if ($arr[$k] == $element) {
				$barr[$k] = $arr[$k + 1];
			} else {
				$barr[$k] = $arr[$k];
			}
		}
		ksort($barr);
		return $barr;
	}

	/**
	 * Returneaza true daca intervalul primit ca parametru este primul interval din 
	 *
	 * @param $interval_id
	 * @return boolean
	 */
	public static function isFirsRowOfInterval($kmlog_id, $user_id, $car_id)
	{
		$interval_id = Kmlog::where('id', $kmlog_id)->first()->interval_id;
		// $month_id = Interval::where('id', $interval_id)->first()->month_id;
		// $month_intervals = Interval::where('month_id', $month_id)->get()->pluck('id')->toArray();
		$prima_inregistrare_din_interval_id = Kmlog::where('interval_id', $interval_id)->where('user_id', $user_id)->where('car_id', $car_id)->orderby('km', 'asc')->first()->id;
		$is_first = ($prima_inregistrare_din_interval_id == $kmlog_id);
		if ($is_first) { //daca id-ul primit ca parametru pentru userul cu masina specificate este prima inregistrare din interval, sterge campul is_first pentru toate inregistrarile din interval
			//la retur se va scrie cu 1 is_first pentru $kmlog_id primit
			$inregistrarile_intervalului = Kmlog::where('interval_id', $interval_id)->where('user_id', $user_id)->where('car_id', $car_id)->get();
			foreach ($inregistrarile_intervalului as $rec) {
				$rec->update(['is_first' => 0]);
			}
		}
		return $is_first;
	}

	/**
	 * Returneaza id-ul intervalului curent (luna selectata cu intervalul selectat) sau intervalul cu id-ul $interval_id daca acesta e diferit de zero
	 *
	 * @return object
	 */
	public static function getSelectedInterval($interval_id = 0)
	{
		$month_id = Month::where('select', 1)->first()->id;
		if ($interval_id == 0) {
			$selected_interval = Interval::where('month_id', $month_id)->where('select', 1)->first();
		} else {
			$selected_interval = Interval::where('id', $interval_id)->first();
		}

		$selected_interval_interval = $selected_interval->interval;
		$arr_ids = [];
		if ($selected_interval_interval == 'Toate') {
			$arr_ids = Interval::where('month_id', $month_id)->where('interval', '!=', 'Toate')->pluck('id')->toArray();;
			$selected_interval['arr_ids'] = $arr_ids;
		}
		return $selected_interval;
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

	public static function leadzero($val, $poz)
	{
		for ($i = 0; $i < ($poz - strlen($val)); $i++) {
			$val = '0' . $val;
		}
		return $val;
	}
}
