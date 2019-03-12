<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'nom', 'description','url_img_partners'
    ];
    public function picturePartner(){
        return $this->hasOne(PicturePartner::class);
    }
}
