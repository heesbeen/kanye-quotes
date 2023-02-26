<?php

namespace Heesbeen\KanyeQuotes;

use Illuminate\Support\ServiceProvider;

class KanyeQuotesServiceProvider extends ServiceProvider {

    /**
     * @return void
     */
    public function register() :void
    {
        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'kanye-quotes-package');
    }

    /**
     * @return void
     */
    public function boot() :void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'kanye-quotes-package');
        $this->loadRoutesFrom( __DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom( __DIR__ . '/../routes/api.php');
    }

}
