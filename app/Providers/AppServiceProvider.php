<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        //
        /*DB::listen(function($sql){

        });
        if(1) {
            $a = new static();
            app()->bind('interface', $a);
        } else {
            app()->bind();
        }*/

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        //$this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
    }
}
