<?php

namespace App\Providers;

use App\Http\Controllers\admin\AdminLoginController;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider {
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Schema::defaultStringLength(191);
       /* view()->composer('*',function($view) {
            $result = array (
                    //'userinfo'  => AdminLoginController::GetUserInfo(),
                );
            $view->with('admin_data', $result);
        });*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
