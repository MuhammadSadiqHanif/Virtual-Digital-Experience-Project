<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = ['logo','primary_color','secondary_color','font_family','icon_color','domain','font_family_css','allowed_domain','domain_verified'];
}
