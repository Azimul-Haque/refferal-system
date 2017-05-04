<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\SocialProvider;
use App\SocialSite;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role', 'email', 'phone', 'password', 'activated', 'image', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    function socialProviders() 
    {
        return $this->hasMany(SocialProvider::class);
    }

    public function socialsites() {
        return $this->hasMany(SocialSite::class);
    }

}
