<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PicturePartner extends Model
{
    public $table = 'pictures_partners';
    protected $fillable = [
        'lien', 'titre'
    ];
    public function partner() {
        return $this->belongsTo(Partner::class);
    }
}
