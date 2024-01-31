<?php

namespace sytou\test;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;

class TestServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // تحميل ملفات التوجيه (Routes)
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // تحميل المهام (Migrations) ونشرها فقط عند تثبيت الحزمة
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/Migrations');

            // تنفيذ التحديثات تلقائياً
            Artisan::call('migrate', ['--path' => 'vendor/sytou/test/src/Migrations']);
        }

        // تحميل المشاهدات (Views)
        $this->loadViewsFrom(__DIR__.'/views', 'sytou/test');
    }

    public function register()
    {
        // التسجيل
    }
}
