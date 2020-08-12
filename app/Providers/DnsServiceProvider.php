<?php

namespace App\Providers;

use App\DnsProvider\Cloudflare;
use App\DnsProvider\DnsInterface;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class DnsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(DnsInterface::class, function () {
            return new Cloudflare(new Client);
        }); 
    }
}
