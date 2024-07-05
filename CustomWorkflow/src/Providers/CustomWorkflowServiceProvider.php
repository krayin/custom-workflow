<?php

namespace Webkul\CustomWorkflow\Providers;

use Illuminate\Support\ServiceProvider;

class CustomWorkflowServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->register(EventServiceProvider::class);

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'customworkflow');
    }

    /**
     * Register services.
     *
     * @return void
     */ 
    public function register()
    {
    
    }
}