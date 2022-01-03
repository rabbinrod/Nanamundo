<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    //Relacion uno a muchos
    public function service(){
        return $this->hasMany('App\Models\Service');
    }
}
