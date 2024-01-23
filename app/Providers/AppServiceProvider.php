<?php

namespace App\Providers;

use App\Models\Media;
use App\Models\Meta;
use App\Models\Social;
use App\Models\WorkingDays;
use Carbon\Carbon;
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
            $now=Carbon::now('Asia/Dubai');
            $today=Carbon::now('Asia/Dubai')->dayOfWeek;
            $working_day=WorkingDays::find($today);

            $meta=Meta::first();
//            $logo=$meta->header_logo;
            $media=Media::first();
            $socials=Social::orderBy('created_at','desc')->paginate(15);
            $view->with('admin', auth()->user());
            $view->with('socials', $socials);
            $view->with('media', $media);
//            $view->with('logo', $logo);
            $view->with('meta', $meta);
            $view->with('now', $now);
//            $view->with('closing_hour', $working_day->end);
        });

        Schema::defaultStringLength(191);
    }
}
