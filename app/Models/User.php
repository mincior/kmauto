<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,  UserRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
		'name', 
		'email', 
		'password', 
		'observatii', 
		'calificativ', 
		'is_admin', 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* -------------------------------------------------------------------------------------------- */
    // Mutators (SET) Attribute
    /* -------------------------------------------------------------------------------------------- */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value ? ucwords($value) : null;
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = app('hash')->needsRehash($value) ? Hash::make($value) : $value;
    }
    /* -------------------------------------------------------------------------------------------- */
    // Accessors (GET) Attribute (APPENDED)
    /* -------------------------------------------------------------------------------------------- */
    public function getIsDeveloperAttribute()
    {
        return $this->attributes['is_admin'] == 1;
    }

    /* -------------------------------------------------------------------------------------------- */
    // Accessors (GET) Attribute
    /* -------------------------------------------------------------------------------------------- */

    /* -------------------------------------------------------------------------------------------- */
    // Overrides
    /* -------------------------------------------------------------------------------------------- */

    /* -------------------------------------------------------------------------------------------- */
    // Relationships
    /* -------------------------------------------------------------------------------------------- */

    /* -------------------------------------------------------------------------------------------- */
    // Actions
    /* -------------------------------------------------------------------------------------------- */

    /* -------------------------------------------------------------------------------------------- */
    // Functions
    /* -------------------------------------------------------------------------------------------- */

    /* -------------------------------------------------------------------------------------------- */
    // Construction
    /* -------------------------------------------------------------------------------------------- */
    public $timestamps = false;
}
