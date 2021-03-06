<?php

declare(strict_types=1);

namespace CarolPelu\BlocklyAutomation\ServiceProviders;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BlocklyAutomationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();
        $this->publishes([
            __DIR__ . '/../../resources/assets' => public_path('blockly-automation'),
        ], 'assets');
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('blockly-automation'),
        ], 'config');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'blockly-automation');
    }

    public function register()
    {
        // Automatically apply the package configuration
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'middleware' => config('blockly-automation.middleware'),
        ];
    }
}
