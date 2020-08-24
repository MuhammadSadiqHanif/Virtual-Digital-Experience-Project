<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicPdf extends Model
{
    protected $fillable = ['link','title','order'];
}
