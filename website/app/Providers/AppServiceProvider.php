<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //Ajouté par le développeur voir la function boot

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         //Ajouté pour géré la gestion de la longueur de la clé utilisée par Laravel et éviter une erreur de migration
         Schema::defaultStringLength(191);
    }
}
