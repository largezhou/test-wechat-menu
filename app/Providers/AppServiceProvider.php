<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Largezhou\WechatMenu\Manager;

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
        Manager::getInstance()->setConfig(config('wechat_menu'));
    }
}
