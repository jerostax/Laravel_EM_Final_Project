<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PicturePartner extends Model
{
    protected $fillable = [
        'lien', 'titre'
    ];
    public function partner() {
        return $this->belongsTo(Partner::class);
    }
}
