<?php

namespace App\Providers;

use App\View\Components\Alert;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
// use App\View\Components\Inputs\Button;
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
        //Tự định nghĩa directive dạng thường
        Blade::directive('datetime', function ($expression) {
            $expression=trim($expression, '\'');
            $expression=trim($expression,'"');
            $dataObject=date_create($expression);
            if(!empty($dataObject)){
                $dataFormat=$dataObject->format('d/m/Y H:i:s');
                return $dataFormat;
            }
            return false;
        });
        // tự định nghĩa directive dạng rẽ nhánh
        Blade::if('env', function ($value) {
            if(config('app.env')===$value){
                return true;
            }
            return false;
        });

        Blade::component('package-alert', Alert::class);
        // Blade::component('button', Button::class);
    }
}
