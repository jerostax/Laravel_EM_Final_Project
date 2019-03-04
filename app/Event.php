<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'titre', 'description', 'category_id', 'status', 'prix'
    ];

    public function setCategoryIdAttribute($value){
       
        if($value == 0){
            $this->attributes['category_id'] = null;
        }else{

            $this->attributes['category_id'] = $value;
        }

    }
    public function scopePublished($query) {
        return $query->where('status', 'Publié');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function pictureEvent(){
        return $this->hasOne(PictureEvent::class);
    }
}
