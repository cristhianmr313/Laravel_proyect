<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;

    protected $fillable=['name','tipo_transporte','jefe'];
    public function punto(){
        return $this->belongsToMany('App\Models\Punto','transportes_puntos', 'punto_id', 'transporte_id');
    }
    public function trabajador(){
        return $this->belongsTo('App\Models\Trabajador','trabajador_id');
    }
}
