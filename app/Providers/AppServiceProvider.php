<?php

namespace App\Providers;

use Illuminate\Database\Events\QueryExecuted;
use illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        DB::listen(function (QueryExecuted $query) {
            Log::info($query->sql);
        });
    }
}
