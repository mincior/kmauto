<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory,  LogRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
        'operatie', 
        'descriere', 
        'timestamps', 
        'data', 
        'user_id', 
		//End craft placeholder #1
        
    ];
    

}
