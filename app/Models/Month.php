<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory,  MonthRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'data_raportarii', 
		'anul_luna', 
		//End craft placeholder #1
        
    ];

}
