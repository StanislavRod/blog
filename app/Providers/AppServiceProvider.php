<?php

namespace App\Providers;

use App\Models\SocialLink;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer(['partials.social'], function ($view) {
            $data = [];
            if (isset($view->getData()['socialLinks'])) {
                $data['socialLinks'] = $view->getData()['socialLinks'];
            } else {
                $data['socialLinks'] = SocialLink::all();
            }

            $view->with($data);
        });
    }
}
