<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define the API route namespace.
     */
    protected $namespace = 'App\Http\Controllers\API';

    public function boot(): void
    {
        parent::boot();
    }

    public function map(): void
    {
        $this->mapApiRoutes();
    }

    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace) // Enables shorthand controllers
            ->group(base_path('routes/api.php'));
    }
}

