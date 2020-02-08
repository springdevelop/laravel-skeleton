<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Founding extends Model
{
    protected $table = 'foundings';
    protected $fillable = [
        'date_founding',
        'founding',
        'currrent',
        
    ];
}
