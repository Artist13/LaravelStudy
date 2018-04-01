<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Blade;
use Response;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::directive('name',function(){
            'My Directive';
        });
        //Регистрируем новый ответ
        Response::macro('myRes', function($value){
            //Возвращаем ответ с помощью метода make в качестве контента используем входную переменную
            return Response::make($value);
        });

        /*DB::listen(function($query){
            dump($query->sql);
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
