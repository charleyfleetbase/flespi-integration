<?php

namespace Fleetbase\Flespi\Providers;

use Fleetbase\Providers\CoreServiceProvider;

class FlepsiIntegrationServiceProvider extends CoreServiceProvider
{
     /**
     * Register any application services.
     *
     * Within the register method, you should only bind things into the
     * service container. You should never attempt to register any event
     * listeners, routes, or any other piece of functionality within the
     * register method.
     *
     * More information on this can be found in the Laravel documentation:
     * https://laravel.com/docs/8.x/providers
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(CoreServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Additional setup or operations
    }
}
