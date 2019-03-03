<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PictureEvent extends Model
{
    public $table = 'pictures_events';
    
    protected $fillable = [
        'url_img_event', 'titre'
    ];
    public function event() {
        return $this->belongsTo(Event::class);
    }
}
