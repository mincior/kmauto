<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carsecond extends Model
{
    use HasFactory,  CarsecondRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'nr_identificare', 
		'are_gps', 
		'recep_auto', 
		'an_fabr', 
		'poluare', 
		'p_kw', 
		'mtma', 
		'cap_cyl', 
		'cap_rez', 
		'auto_inloc', 
		'km_contract', 
		'car_id', 
		'frame_id', 
		//End craft placeholder #1
        
    ];
    public $timestamps = false;

}
