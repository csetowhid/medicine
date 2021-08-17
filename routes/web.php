<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AlphaController;

Route::get('/', function () {
    return view('home.homepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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
