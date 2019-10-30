<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Curso extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'curso';
    
    protected $fillable = [
         'nombre', 'nrc', 'hora', 'profesor', 'aula'
    ];
}