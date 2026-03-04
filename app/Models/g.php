<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class g extends Model
{

    public $user = null;

    public function __construct()
    {
        $this->user = Auth::user();
    }
}
