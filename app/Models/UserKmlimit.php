<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserKmlimit extends Model
{
    use HasFactory,  UserKmlimitRelationships;
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
