<?php

namespace App;

use App\SiteSetting;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','company_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function site_settings()
    {
        return $this->hasOne(SiteSetting::class,'domain','domain');
    }

    public function sites()
    {
        return $this->belongsToMany(SiteSetting::class,'user_sites','user_id','site_id');
    }

    public function userDomains($param)
    {
        return $this->sites()->pluck('site_settings.'.$param)->toArray();
    }
}
