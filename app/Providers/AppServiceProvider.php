<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        //
        Paginator::useBootstrapFive();

        Blade::directive('limit', function ($expression) {
            return "<?php echo Str::limit($expression); ?>";
        });

        Blade::directive('formatdate', function ($expression) {
            return "<?php echo ($expression)->format('d F Y H:i');  ?>";
        });
    }
}
