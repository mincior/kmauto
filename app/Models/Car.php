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
      'observatii', 
      'type_id', 
      'fuel_id', 
      'brand_id', 
      ];
    public $timestamps = false;

}
