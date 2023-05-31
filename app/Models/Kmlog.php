<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    'observatii',
    'interval_id',
    'user_id',
    'car_id',
    'stat_id',
    'department_id',
    'created_at',
    'updated_at',
    'is_first',
  ];

  
}
