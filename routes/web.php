<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::get('/logout', [AdminController::class, 'Logout'])->name('admin.logout');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard_master');
    })->name('dashboard');
});
