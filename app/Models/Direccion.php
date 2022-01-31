<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

     //Relacion uno a uno
     public function order(){
        return $this->hasOne('App\Models\Order');
    }
    
}
