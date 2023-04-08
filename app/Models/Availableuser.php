<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availableuser extends Model
{
    use HasFactory,  AvailableuserRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'valoare', 
		'interval_id', 
		'user_id', 
		//End craft placeholder #1
        
    ];
    public $timestamps = false;

}
