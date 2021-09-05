<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AlphaController;
use App\Http\Controllers\SubAlphaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BlogController;


Route::get('/', [IndexController::class, 'index'])->name('index');
Auth::routes();

/*-----------------------Admin Route---------------------*/
Route::prefix('admin')->middleware('is_admin')->group(function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'admin_index'])->name('admin.home');

    //Medicine
    Route::get('/medicine/index', [MedicineController::class, 'index'])->name('medicine.index');
    Route::post('/medicine/add', [MedicineController::class, 'add'])->name('medicine.add');
    Route::get('/medicine/all', [MedicineController::class, 'all'])->name('medicine.all');
    Route::get('/medicine/medicine_delete/{id}', [MedicineController::class, 'medicine_delete'])->name('medicine_delete');
    Route::get('/medicine/medicine_edit/{id}', [MedicineController::class, 'medicine_edit'])->name('medicine.edit');

    //Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings/add', [SettingsController::class, 'add'])->name('settings.add');
    Route::post('/settings/update', [SettingsController::class, 'update'])->name('settings.update');


    //Alpha
    Route::get('/alpha', [AlphaController::class, 'alpha_index'])->name('alpha.index');
    Route::post('/alpha/create', [AlphaController::class, 'alpha_create'])->name('alpha.create');
    Route::get('/alpha/edit/{id}', [AlphaController::class, 'alpha_edit']);
    Route::get('/alpha/delete/{id}', [AlphaController::class, 'alpha_delete'])->name('alpha.delete');

//Sub Alpha
    Route::get('/subalpha', [SubAlphaController::class, 'sub_alpha_index'])->name('sub.alpha.index');
    Route::post('/subalpha/create', [SubAlphaController::class, 'sub_alpha_create'])->name('sub.alpha.create');
    Route::get('/subalpha/edit/{id}', [SubAlphaController::class, 'sub_alpha_edit']);
    Route::get('/subalpha/delete/{id}', [SubAlphaController::class, 'sub_alpha_delete']);
    //Blog
    Route::get('/blog/home', [BlogController::class, 'admin_blog_index'])->name('admin.blog.home');
    Route::get('/blog/status/{id}/{blog_status}', [BlogController::class, 'admin_blog_change']);
});

//Frontend
Route::get('/alpha/{id}', [IndexController::class, 'alpha_name']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*-----------------------User Route---------------------*/
//Blog
//Route::prefix('user')->group(function () {
    Route::get('/blog/index', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
    Route::post('/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
    Route::get('/blog/all', [App\Http\Controllers\BlogController::class, 'all'])->name('blog.all');
    Route::get('/blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit']);
    Route::get('/blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete']);
//});
