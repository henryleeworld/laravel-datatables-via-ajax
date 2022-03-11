<?php

use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('simple');
Route::get('/row-details', [HomeController::class, 'getRowDetails'])->name('row_details');
Route::get('/master-details', [HomeController::class, 'getMasterDetails'])->name('master_details');
Route::get('/column_search', [HomeController::class, 'getColumnSearch'])->name('column_search');
Route::get('/row-attributes', [HomeController::class, 'getRowAttributes'])->name('row_attributes');
Route::get('/carbon', [HomeController::class, 'getCarbon'])->name('carbon');