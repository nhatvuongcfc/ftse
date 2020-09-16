<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\FE\FeNavbar;
use Illuminate\Support\Facades\View;

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
        // $data['navbars']=FeNavbar::status()->get();
        // View::share($data);
    }
}
