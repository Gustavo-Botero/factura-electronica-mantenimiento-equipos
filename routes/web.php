<?php

use App\Http\Controllers\MaintenanceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::resource('mantenimiento', MaintenanceController::class);

Route::post(
    'mantenimiento/showTable',
    [MaintenanceController::class, 'showDatatable']
)->name('mantenimiento.showTable');
