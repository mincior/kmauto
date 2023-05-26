<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory,  LogRelationships;
    protected $casts = [
        'data' => 'json'
      ];
    
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

    public function setDataAttribute($value)
    {
      $data = [];
      foreach ($value as $key=>$array_item) {
        if (!is_null($array_item)) {
          $data[$key] = $array_item;
        }
      }
  
      $this->attributes['data'] = $data;
    }
      

}
