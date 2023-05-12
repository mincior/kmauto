<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarAsigValue extends Model
{
    use HasFactory,  CarAsigValueRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'name', 
		//End craft placeholder #1
        
    ];
    public $timestamps = false;

}
