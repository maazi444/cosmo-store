<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/newlogin', function () {
    return view('control_panel.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
