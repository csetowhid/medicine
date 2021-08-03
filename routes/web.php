<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SettingsController;

Route::get('/', function () {
    return view('home.homepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Medicine
Route::get('/medicine/index', [MedicineController::class, 'index'])->name('medicine.index');
Route::post('/medicine/add', [MedicineController::class, 'add'])->name('medicine.add');
Route::get('/medicine/all', [MedicineController::class, 'all'])->name('medicine.all');

//Medicine
Route::get('/settings/index', [SettingsController::class, 'index'])->name('settings.index');
Route::post('/settings/add', [SettingsController::class, 'add'])->name('settings.add');
Route::post('/settings/update', [SettingsController::class, 'update'])->name('settings.update');
