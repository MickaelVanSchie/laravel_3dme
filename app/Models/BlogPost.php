<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    public function user() {
        return $this->hasOne('App\Models\User');
    }
}
