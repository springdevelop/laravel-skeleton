<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table = 'donates';
    protected $fillable = [
        'name',
        'desc',
        'amount',
        'date_donate',
    ];
}
