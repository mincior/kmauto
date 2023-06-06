<?php

namespace App\Observers;

use App\Models\Car;
use App\Models\Log;
use App\Models\Stat;
use App\Models\User;
use App\Models\Kmlog;
use App\Models\Month;
use App\Models\Interval;
use Illuminate\Support\Facades\Auth;

class KmlogObserver
{
    /**
     * Handle the Kmlog "created" event.
     */
    public function created(Kmlog $kmlog): void
    {
            $data = $kmlog->toArray();
            if (array_key_exists('is_first', $data) == false){
                @$data['numar'] = Car::where('id', $data['car_id'])->first()->numar;
                @$data['name'] = User::where('id', $data['user_id'])->first()->name;
                @$data['status'] = Stat::where('id', $data['stat_id'])->first()->name;
                @$data['interval'] = Interval::where('id', $data['interval_id'])->first()->interval;
                @$data['luna'] = Month::where('id', Interval::where('id', $data['interval_id'])->first()->month_id)->first()->anul_luna;
                Log::create(['operatie' => 'creare', 'descriere'=> 'kmlog', 'data' => json_encode($data, JSON_PRETTY_PRINT), 'user_id'=> Auth::user()->id]);
            }
    }

    /**
     * Handle the Kmlog "updated" event.
     */
    public function updated(Kmlog $kmlog): void
    {
            $data = $kmlog->toArray();
            @$data['numar'] = Car::where('id', $data['car_id'])->first()->numar;
            @$data['name'] = User::where('id', $data['user_id'])->first()->name;
            @$data['status'] = Stat::where('id', $data['stat_id'])->first()->name;
            @$data['interval'] = Interval::where('id', $data['interval_id'])->first()->interval;
            @$data['luna'] = Month::where('id', Interval::where('id', $data['interval_id'])->first()->month_id)->first()->anul_luna;
            Log::create(['operatie' => 'modificare', 'descriere'=> 'kmlog', 'data' => json_encode($data, JSON_PRETTY_PRINT), 'user_id'=> Auth::user()->id]);
    }

    /**
     * Handle the Kmlog "deleted" event.
     */
    public function deleted(Kmlog $kmlog): void
    {
            $data = $kmlog->toArray();
            @$data['numar'] = Car::where('id', $data['car_id'])->first()->numar;
            @$data['name'] = User::where('id', $data['user_id'])->first()->name;
            @$data['status'] = Stat::where('id', $data['stat_id'])->first()->name;
            @$data['interval'] = Interval::where('id', $data['interval_id'])->first()->interval;
            @$data['luna'] = Month::where('id', Interval::where('id', $data['interval_id'])->first()->month_id)->first()->anul_luna;
            Log::create(['operatie' => 'stergere', 'descriere'=> 'kmlog', 'data' => json_encode($data, JSON_PRETTY_PRINT), 'user_id'=> Auth::user()->id]);
        
    }

}