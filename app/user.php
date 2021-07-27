<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public function role()
    {
        return $this->belongsToMany(role::class);
    }
}
