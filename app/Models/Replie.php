<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replie extends Model
{
    use HasFactory;
    public  function likes()
    {
        return $this->morphedByMany(Subscription::class,"likeable");
    }

    public  function Taggs()
    {
        return $this->morphedByMany(Tagg::class,"likeable");
    }
}
