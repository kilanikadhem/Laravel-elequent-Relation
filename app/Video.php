<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function reactions(){
        return $this->morphMany(Reaction::class,'reactional');
    }
}
