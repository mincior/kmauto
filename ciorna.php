<?php

use App\Models\Month;
use App\Models\Interval;
$selectedMonth_id = Month::where('select', 1)->first()->id;
$selectedInterval_id = Interval::where('month_id', $selectedMonth_id)->where('select', 1)->first()->id;
//dd($current_month, $current_day, $numarZileLunaAnterioara);
