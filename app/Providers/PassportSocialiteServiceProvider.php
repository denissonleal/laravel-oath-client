<?php

namespace App\Providers;

use Laravel\Socialite\Contracts\Factory;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\SocialiteServiceProvider;

class PassportSocialiteServiceProvider extends SocialiteServiceProvider
{
    public function boot()
    {
        $this->app->extend(Factory::class, function ($service) {
            $service->extend('passport', function ($app) {
                $config = $app['config']['services.passport'];
                return Socialite::buildProvider(\Laravel\Socialite\Two\PassportProvider::class, $config);
            });

            return $service;
        });
    }
}
