<?php

namespace App\Providers;

use App\Models\Media;
use App\Models\Meta;
use App\Models\Social;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        view()->composer('*',function($view) {
            $meta=Meta::first();
//            $logo=$meta->header_logo;
            $media=Media::first();
            $socials=Social::orderBy('created_at','desc')->paginate(15);
            $view->with('admin', auth()->user());
            $view->with('socials', $socials);
            $view->with('media', $media);
//            $view->with('logo', $logo);
            $view->with('meta', $meta);
        });

        Schema::defaultStringLength(191);
    }
}
