<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];

    const PENDIENTE = 1;
    const APROBADO = 2;
    const RECHAZADO = 3;
    const FINALIZADO = 4;

    //Relacion uno a uno inversa
    public function direccion(){
        return $this->belongsTo('App\Models\Direccion');
    }

     //Relacion uno a muchos inversa
     public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function hijos(){
        return $this->belongsTo('App\Models\Hijo');
    }

}
