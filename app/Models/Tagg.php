<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagg extends Model
{
    use HasFactory;

        public  function likes()
    {
        return $this->morphedToMany(App\Models\Replie::class,"Replie");
    }
}
