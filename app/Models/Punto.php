<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    use HasFactory;
    protected $fillable=['name','image','direccion','descripcion','status','jefe','transporte'];
    public function trabajador(){
        return $this->belongsToMany('App\Models\Trabajador','trabajadors_puntos', 'punto_id', 'trabajador_id');
    }
    public function transporte(){
        return $this->belongsToMany('App\Models\Transporte','transportes_puntos', 'punto_id', 'transporte_id');
    }
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
