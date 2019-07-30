<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class counters extends Model
{
    protected $fillable = [
        'movies_id',
        'count',
    ];
}
