<?php

namespace App\Shared\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureUrl();
        $this->configureModels();
    }

    private function configureUrl(): void
    {
        if ($this->app->isProduction()) {
            Url::forceScheme('https');
        }
    }

    private function configureModels(): void
    {
        DB::prohibitDestructiveCommands($this->app->isProduction());
        Model::shouldBeStrict();
        Model::preventLazyLoading();
        Model::preventAccessingMissingAttributes();
        Model::preventSilentlyDiscardingAttributes();
    }
}
