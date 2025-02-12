<?php

use App\Http\Controllers\Account\AccountController;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'account',
        'as' => 'account.',
        'middleware' => 'auth'
    ], function() {
    Route::get('overview', [AccountController::class, 'overview'])->name('overview');
});
