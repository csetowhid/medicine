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
Route::get('/medicine/add', [MedicineController::class, 'index'])->name('medicine.add');

//Medicine
Route::get('/settings/index', [SettingsController::class, 'index'])->name('settings.index');
Route::post('/settings/add', [SettingsController::class, 'add'])->name('settings.add');
