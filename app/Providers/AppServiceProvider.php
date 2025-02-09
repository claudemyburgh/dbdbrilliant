<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        Schema::defaultStringLength(191);


        Str::macro('formatPhone', function (string $number) {
            // Remove non-numeric characters
            $number = preg_replace('/\D/', '', $number);

            // Ensure it starts with 0027 and replace it with +27
            if (str_starts_with($number, '0027')) {
                $number = '+27' . substr($number, 4);
            } elseif (str_starts_with($number, '27')) {
                $number = '+27' . substr($number, 2);
            }

            // Format the number to +27 71 079 5627
            return preg_replace('/(\+\d{2})?(\d{2})(\d{3})(\d{4})/', '$1 $2 $3 $4', $number);
        });
    }
}
