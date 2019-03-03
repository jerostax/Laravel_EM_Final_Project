<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public function picturePartner(){
        return $this->hasMany(PicturePartner::class);
    }
}
