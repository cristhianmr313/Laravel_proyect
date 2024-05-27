<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
     /* relacion de muchos a muchos  */
     public function user(){
        return $this->belongsToMany('App\Models\User');
  }
  /* relacion de muchos a muchos  */
  public function permiso (){
    return $this->belongsToMany('App\Models\Permiso');
}
}
