<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory, CarRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'numar', 
      'consum_mediu', 
      'carburant', 
      'activ', 
      'observatii', 
      'type_id', 
      'brand_id', 
          
    ];

}
