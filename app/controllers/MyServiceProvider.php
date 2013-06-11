<?php

use Illuminate\Support\ServiceProvider; 
 
class MyServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('MyController', function($app)
        {
            return new MyController($app['validator']);
        });
    }
    
    public function provides()
    {
        return array('MyController');
    }
}
