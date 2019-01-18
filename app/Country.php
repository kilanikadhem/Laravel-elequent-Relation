<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  public  function forums()
    {
        return $this->hasManyThrough(
            Forum::class,
            Bloger::class,
            'country_id',
            'bloger_id',
            'id',
            'id');
    }
}
