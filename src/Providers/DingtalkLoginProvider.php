<?php
namespace Yangzie\DingtalkLogin\Providers;

use Illuminate\Support\ServiceProvider;
use Yangzie\DingtalkLogin\DingtalkLogin;

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

        include dirname(dirname(__FILE__)).'/routes.php';

        $this->publishes([
            dirname(dirname(__FILE__)).'/dingtalk.php' => config_path('dingtalk.php')
        ], 'dingtalk');
    }

    public function provides()
    {
        return [DingtalkLogin::class, 'dinglogin'];
    }
}