<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PictureProduct extends Model
{
    protected $fillable = [
        'lien', 'titre'
    ];
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
