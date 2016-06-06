<?php

namespace DevePit\Form;

use DevePit\Form\Form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

        $this->loadTranslationsFrom( __DIR__.'/Lang', 'Form');

        $this->publishes([
            __DIR__.'/Config/Form.php' => config_path('Form.php'),
            __DIR__ . '/Views'=>base_path('resources/views/devepit/form')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom( __DIR__.'/Config/Form.php', 'Form');

        $this->loadViewsFrom(__DIR__ . '/Views', 'Form');

        $this->app['Form']=$this->app->share(function($app){
          return new Form;
        });
    }
}
