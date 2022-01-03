<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function profile(){
        return $this->belongsTo('App\Models\Profile');
    }
}