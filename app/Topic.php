<?php

namespace App;

use App\TopicContent;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title','lottie_desktop','lottie_mobile','icon','position','domain'];

    public function content()
    {
    	return $this->hasOne(TopicContent::class);
    }
}
