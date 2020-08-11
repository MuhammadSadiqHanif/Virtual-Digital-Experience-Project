<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = ['logo','primary_color','secondary_color','font_family','icon_color','domain','font_family_css','allowed_domain','domain_verified','cloudflare_id','company_name','company_url'];

    public function users()
    {
        return $this->belongsToMany(User::class,'user_sites','site_id','user_id');
    }

    public function usersName($param)
    {
        return $this->users()->pluck('users.'.$param)->toArray();
    }
}
