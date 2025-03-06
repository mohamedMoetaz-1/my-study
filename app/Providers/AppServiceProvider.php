<?php
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Place API-specific bindings here if needed
    }

    public function boot(): void
    {
        // Force JSON response for API requests
        Response::macro('api', function ($data, $status = 200) {
            return Response::json([
                'success' => $status < 400,
                'data' => $data,
            ], $status);
        });
    }
}
