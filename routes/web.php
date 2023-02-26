<?php

use Illuminate\Support\Facades\Route;
use Heesbeen\KanyeQuotes\Http\Controllers\KanyeQuotesController;

Route::get('/kanye-quotes', [KanyeQuotesController::class, 'index'])
    ->name('kanye-quotes.index')
    ->middleware(['web','auth']);
