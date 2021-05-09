<?php

namespace RizkyBaihaqy\LaravelFakerIndonesianWords;

use Illuminate\Support\ServiceProvider;
use Faker\Generator;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if (class_exists(Generator::class)) {
            $this->app->extend(Generator::class, function (Generator $generator, $app) {
                $generator->addProvider(new IndonesianWords($generator));
                
                return $generator;
            });
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
