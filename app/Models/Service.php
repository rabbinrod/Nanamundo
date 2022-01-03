<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];

    const PENDIENTE = 1;
    const APROBADO = 2;
    const RECHAZADO = 3;
    const FINALIZADO = 4;

    //Relacion uno a muchos inversa
    public function nana(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function precio(){
        return $this->belongsTo('App\Models\Precio');
    }

    //Relacion uno a muchos
    public function comment(){
        return $this->hasMany('App\Models\Comment');
    }

    //Relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //RElacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
