<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Room extends Eloquent
{ 
    protected $connection = 'mongodb';
    protected $collection = 'room';
    
    protected $fillable = [
        'numero'
    ];
}
