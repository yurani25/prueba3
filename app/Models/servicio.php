<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;
        //Relacion Muchos a Muchos
        public function soldado(){
            return $this->belongsToMany('App\Models\soldado');
        }
}
