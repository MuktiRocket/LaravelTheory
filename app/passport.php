<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class passport extends Model
{
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
