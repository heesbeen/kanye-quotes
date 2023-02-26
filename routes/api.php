<?php

use Illuminate\Support\Facades\Route;
use Heesbeen\KanyeQuotes\Http\Controllers\KanyeQuotesApiController;

Route::prefix('api')->group(function () {
    Route::get('kanye-quotes', [KanyeQuotesApiController::class, 'quotes'])
        ->name('kanye-quotes.quotes')
        ->middleware(['web','auth:sanctum']);
});
