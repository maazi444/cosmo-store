<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::prefix('/admin')->group(
    function () {
        Route::get('/categories', function () {
            return view('pages.admincp.categories.categories');
        })->name('admin.categories');
        Route::get('/categories/add', [AdminController::class, 'CreateCategory'])->name('admin.create.category');
        Route::post('/categories/store', [AdminController::class, 'StoreCategory'])->name('admin.store.category');
    }
);


Route::get('/logout', [AdminController::class, 'Logout'])->name('admin.logout');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.admincp.dashboard');
    })->name('dashboard');
});
