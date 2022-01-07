<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //inversa uno a muchos
    public function service(){
        return $this->belongsTo('App\Models\Service');
    }
}
