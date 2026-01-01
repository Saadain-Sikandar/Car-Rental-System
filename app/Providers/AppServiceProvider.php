<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // No need to call Passport::routes() in Passport 13
        // Passport::$keyPath = storage_path(); // also remove this
    }
}
