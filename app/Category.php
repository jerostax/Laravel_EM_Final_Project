<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //relation One To Many
    public function events() {
        return $this->hasMany(Event::class);
    }
}
