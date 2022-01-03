<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion inversa uno a muchos
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function service(){
        return $this->belongsTo('App\Models\User');
    }
}
