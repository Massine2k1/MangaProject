<?php

use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('product',ProductController::class);
    Route::get('admin/product/{product}/price/create',[PriceController::class,'create'])->name('price.create');
    Route::get('admin/product/{product}/price',[PriceController::class,'store'])->name('price.store');
});
