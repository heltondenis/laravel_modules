<?php

namespace App\Modules\Auditoria\Providers;

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
        $this->loadTranslationsFrom(module_path('auditoria', 'Resources/Lang', 'app'), 'auditoria');
        $this->loadViewsFrom(module_path('auditoria', 'Resources/Views', 'app'), 'auditoria');
        $this->loadMigrationsFrom(module_path('auditoria', 'Database/Migrations', 'app'), 'auditoria');
        $this->loadConfigsFrom(module_path('auditoria', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('auditoria', 'Database/Factories', 'app'));
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
