<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDep extends Model
{
    use HasFactory,  UserDepRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'observatii', 
		'department_id', 
		'user_id', 
		'interval_id', 
		//End craft placeholder #1
        
    ];
    public $timestamps = false;
}
