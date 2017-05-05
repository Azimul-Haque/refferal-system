<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Type;

class SocialSite extends Model
{
    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function type() {
    	return $this->belongsTo('App\Type', 'type_id', 'id');
    }
}
