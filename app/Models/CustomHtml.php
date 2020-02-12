<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomHtml extends Model
{
    protected $table = 'custom_htmls';
    protected $fillable = [
        'position',
        'desc',
        'content',
    ];
}
