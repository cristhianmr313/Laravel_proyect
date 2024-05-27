<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

     /* relacion uno a uno inversa */
     public function user(){
        return $this->belongsTo('App\Models\User');

    }
}
