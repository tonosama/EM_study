<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;
use App\Http\Validators\KatakanaValidator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

      $validator = $this->app['validator'];
      $validator->resolver(function($translator,$data,$rules,$messages){
        return new KatakanaValidator($translator,$data,$rules,$messages);

      });


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
