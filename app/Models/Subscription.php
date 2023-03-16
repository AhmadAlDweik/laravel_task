<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOneOrMany;

class Subscription extends Model
{
    use HasFactory;

    public  function likes()
    {
        return $this->MorphedToMany("App\Models\Replie","replie");
    }
}
