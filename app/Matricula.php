<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Matricula extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'matricula';
    
    protected $fillable = [
         'curso', 'estudiante'
    ];
}
