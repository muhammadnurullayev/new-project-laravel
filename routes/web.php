<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/city/{name}', function ($name) {
    return "Welcome to Toshkent!";
})->name('city.show');

Route::prefix('admin')->group(function() {
    Route::get('/users/{id}', function ($id) {
        return "User ID:  Hello User!!";
    })->name('admin.users.show');
});

Route::prefix('profile')->group(function() {
    Route::get('/view', function () {
        return 'Profile is View';
    })->name('profile.view');

    Route::get('/edit', function () {
        return 'Profile is Edit';
    })->name('profile.edit');

    Route::get('/settings', function () {
        return 'Profile is Setting';
    })->name('profile.settings');
});

Route::prefix('products')->group(function() {
    Route::get('/', function () {
        return 'Products';
    });

    Route::get('/{id}', function ($id) {
        return "Product ID: Banana";
    });

    Route::get('/{id}/edit', function ($id) {
        return "Edit Product:  Apple";
    })->name('products.edit');
});

Route::get('/old-url', function () {
    return redirect('/new-url');
});





