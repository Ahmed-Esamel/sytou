<?php

namespace sytou\test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // تحميل ملفات التوجيه (Routes)
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // تحميل المهام (Migrations)
        $this->loadMigrationsFrom(__DIR__.'/Migrations');

        // تحميل المشاهدات (Views)
        $this->loadViewsFrom(__DIR__.'/views', 'wdd_slug');

        // نشر المهام (Publish Migrations)
        $this->publishes([
            __DIR__.'/Migrations' => database_path('migrations')
        ], 'slug-migrations');
    }

    public function register()
    {
        // التسجيل
    }
}
