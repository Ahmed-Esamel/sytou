<?php

namespace sytou\test;

use Illuminate\Support\ServiceProvider;

class  TestServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'wdd.slug');
    }

    public function require(){
        
    }
}