<?php

namespace Modules\Quotes\Providers;

use Caffeinated\Menus\Facades\Menu;
use Caffeinated\Bonsai\Facades\Bonsai;
use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('quotes', 'resources/lang', 'modules'), 'quotes');
        $this->loadViewsFrom(module_path('quotes', 'resources/views', 'modules'), 'quotes');
        $this->loadMigrationsFrom(module_path('quotes', 'database/migrations', 'modules'), 'quotes');
        $this->loadConfigsFrom(module_path('quotes', 'config', 'modules'));
        $this->loadFactoriesFrom(module_path('quotes', 'database/factories', 'modules'));

        Bonsai::add('/modules/quotes/css/quotes.css');
        Bonsai::add('/modules/quotes/js/quotes.js');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
