<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)
    ->group(function (){
        Route::get('', 'index')->name('home');

        Route::get('category/{id}', 'category')->name('category');

        Route::get('/admin', 'admin')->name('admin');

        Route::get('product/{id}', 'product')->name('product');

        Route::get('create-product', 'create')->name('create');

        Route::post('create-product', 'store')->name('create');

        Route::delete('delete/product/{id}', 'destroy')->name('destroy');

        Route::get('create-category', 'createCat')->name('createCat');

        Route::post('create-category', 'storeCat')->name('createCat');

        Route::delete('delete/category/{id}', 'destroyCat')->name('destroyCat');

    });


Route::controller(OrderController::class)
    ->group(function () {
        Route::post('order', 'store')->name('order');

        Route::get('order', 'index')->name('successOrder');

        Route::get('orderList', 'show')->name('ordersList');
    });


