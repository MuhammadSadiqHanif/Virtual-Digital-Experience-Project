<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicContent extends Model
{
    protected $fillable = ['topic_id','videos','video_default','pdfs','pdf_default','chatbot','video_default','text_slider'];
}
