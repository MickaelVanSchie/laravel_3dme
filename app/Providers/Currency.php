<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class Currency extends ServiceProvider
{
    public function boot(): void
    {

        Blade::directive('currency', function ($expression) {
            return "<?php
                \$__args = [{$expression}];
                \$__amount = \$__args[0] ?? 0;

                \$__formatter = new \\NumberFormatter('nl_NL', \\NumberFormatter::CURRENCY);
                echo \$__formatter->formatCurrency((float) \$__amount, 'EUR');
            ?>";
        });
    }
}
