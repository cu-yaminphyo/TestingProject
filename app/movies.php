<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    protected $fillable = [
'cid',
'moviename',
'actorname',
'imagename',
'original_filename',
'mime',
'link',
'review',
    ];
}
