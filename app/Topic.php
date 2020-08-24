<?php

namespace App;

use App\TopicContent;
use App\TopicPdf;
use App\TopicVideo;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title','lottie_desktop','lottie_mobile','icon','position','domain','video_default','pdf_default','text_slider','chatbot_pic'];

    public function content()
    {
    	return $this->hasOne(TopicContent::class);
    }

    public function domain()
    {
    	return $this->belongsTo(SiteSetting::class,'domain','domain');
    }

    public function videos()
    {
    	return $this->hasMany(TopicVideo::class);
    }

    public function pdfs()
    {
    	return $this->hasMany(TopicPdf::class);
    }
}
