<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    function personnes()
        {
            return $this->belongsToMany(Personne::class, 'role_personne');
        }
}
