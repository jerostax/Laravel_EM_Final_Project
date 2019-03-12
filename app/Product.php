<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'titre', 'description', 'prix','url_img_products', 'status', 'form'
    ];
    public function scopePublishedProduct($query) {
        return $query->where('status', 'Publié');
    }
    public function pictureProduct(){
        return $this->hasOne(PictureProduct::class);
    }
}
