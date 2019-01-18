<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    function roles()
        {
            return $this->belongsToMany(Role::class, 'role_personne');
        }
 }

