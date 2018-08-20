<?php

namespace rafaelmorenojs\watermark\Laravel;

//

use Illuminate\Support\ServiceProvider;
use rafaelmorenojs\Watermark\Watermark;

class WatermarkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('watermark', function () {
            return new Watermark();
        });
    }
}
