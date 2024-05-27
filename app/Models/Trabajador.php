<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transporte;

class Trabajador extends Model
{
    use HasFactory;
    protected $fillable=['name','direc','message','phone_number','user_relacionado'];
    /* relacion uno a uno inversa */
    public function user(){
        return $this->belongsTo('App\Models\User');

    }
    public  function transporte(){
        return $this->hasMany(Transporte::class,'id');
    }
    public function punto(){
        return $this->belongsToMany('App\Models\Punto','trabajadors_puntos', 'punto_id', 'trabajador_id');
    }
}
