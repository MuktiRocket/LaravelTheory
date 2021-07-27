<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class mobile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
