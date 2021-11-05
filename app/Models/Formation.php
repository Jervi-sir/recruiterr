<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function profiles()
    {
        return $this->hasMany(\App\Models\Profile::class);
    }

}
