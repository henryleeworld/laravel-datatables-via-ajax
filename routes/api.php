<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/row-details', [APIController::class, 'getRowDetailsData'])->name('api.row_details');
Route::get('/master-details', [APIController::class, 'getMasterDetailsData'])->name('api.master_details');
Route::get('/master-details/{id}', [APIController::class, 'getMasterDetailsSingleData'])->name('api.master_single_details');
Route::get('/column-search', [APIController::class, 'getColumnSearchData'])->name('api.column_search');
Route::get('/row-attributes', [APIController::class, 'getRowAttributesData'])->name('api.row_attributes');
Route::get('/carbon', [APIController::class, 'getCarbonData'])->name('api.carbon');
