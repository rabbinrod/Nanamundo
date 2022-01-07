<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];
    protected $withCount = ['users', 'comment'];

    const PENDIENTE = 1;
    const APROBADO = 2;
    const RECHAZADO = 3;
    const FINALIZADO = 4;


    //Funcion para ver la calificacion y comentarios del servicio
    public function getCalificacionAttribute(){
        if($this->comment_count){

            return round($this->comment->avg('calificacion'), 1);
        }
        else{
            return 5;
        }        
    }

    public function getRouteKeyName(){
        return "slug";
    }

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

    public function requirements(){
        return $this->hasMany('App\Models\Requirement');
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
