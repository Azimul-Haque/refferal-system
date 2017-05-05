<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\SocialSite;

class Type extends Model
{
    public function socialsite() {
    	return $this->hasMany('App\SocialSite', 'id', 'type_id');
    } 
}
