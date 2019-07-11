<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======
>>>>>>> 2f8b188723b26d9cfb58986548b30b8a884dbc23

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        Schema::defaultStringLength(191);
=======
        //
>>>>>>> 2f8b188723b26d9cfb58986548b30b8a884dbc23
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
