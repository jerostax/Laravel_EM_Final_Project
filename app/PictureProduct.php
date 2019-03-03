<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PictureProduct extends Model
{
    public $table = 'pictures_products';
    protected $fillable = [
        'url_img_products', 'titre'
    ];
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
