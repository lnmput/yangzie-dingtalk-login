<?php
namespace Yangzie\DingtalkLogin;

use Illuminate\Support\ServiceProvider;

class DingtalkLoginProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    public function register()
    {
        $this->app->singleton(DingtalkLogin::class, function(){
            return new DingtalkLogin();
        });

        $this->app->alias(DingtalkLogin::class, 'dinglogin');

        $this->publishes([
            __DIR__.'/dingtalk.php' => config_path('dingtalk.php')
        ], 'dingtalk');
    }

    public function provides()
    {
        return [DingtalkLogin::class, 'dinglogin'];
    }
}