<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    protected $fillable = ['imagename', 'original_filename', 'mime'];
}
