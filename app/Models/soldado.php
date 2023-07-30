<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soldado extends Model
{
    use HasFactory;
    public function servicio(){
        return $this->belongsToMany('App\Models\servicio)');
    }
// uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }  
}
