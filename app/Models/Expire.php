<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expire extends Model
{
    use HasFactory,  ExpireRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'casco', 
		'rca', 
		'rovinieta', 
		'ipt', 
		'final_leasing', 
		'car_id', 
		//End craft placeholder #1
        
    ];
    public $timestamps = false;

}
