<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kmlog extends Model
{
    use HasFactory, KmlogRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'km', 
      'picture', 
      'observations', 
      'ordine',
      'interval_id', 
      'user_id', 
      'car_id', 
      'stat_id'
      ];
      public $timestamps = false;
    }
