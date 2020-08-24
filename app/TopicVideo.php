<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicVideo extends Model
{
    protected $fillable = ['video','title','order'];
}
