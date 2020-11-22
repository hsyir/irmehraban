<?php

namespace App\Providers;

use App\Classes\FakerProviders\PersianFaker;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);

        $this->app->singleton('Faker', function($app) {
            $faker = \Faker\Factory::create();
            $faker->addProvider(new PersianFaker());
            return $faker;
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
