<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class g extends Model
{

    public $user = null;

    public function __construct()
    {
        $this->user = new User();
    }
}
