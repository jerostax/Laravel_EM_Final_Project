<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopePublished($query) {
        return $query->where('status', 'Publié');
    }
    public function pictureProduct(){
        return $this->hasOne(PictureProduct::class);
    }
}
