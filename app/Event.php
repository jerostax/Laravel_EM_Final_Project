<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'Titre', 'Description', 'category_id', 'Status', 'Prix'
    ];

    public function setCategoryIdAttribute($value){
       
        if($value == 0){
            $this->attributes['category_id'] = null;
        }else{

            $this->attributes['category_id'] = $value;
        }

    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function pictureEvent(){
        return $this->hasOne(PictureEvent::class);
    }
}
