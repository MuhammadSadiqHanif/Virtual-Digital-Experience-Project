<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title','lottie_desktop','lottie_mobile','icon','position','domain'];
}
