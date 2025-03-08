<?php

use App\Http\Controllers\Api\V1\APIController;
use Illuminate\Support\Facades\Route;

Route::get('/row-details', [APIController::class, 'getRowDetailsData'])->name('api.row_details');
Route::get('/master-details', [APIController::class, 'getMasterDetailsData'])->name('api.master_details');
Route::get('/master-details/{id}', [APIController::class, 'getMasterDetailsSingleData'])->name('api.master_single_details');
Route::get('/column-search', [APIController::class, 'getColumnSearchData'])->name('api.column_search');
Route::get('/row-attributes', [APIController::class, 'getRowAttributesData'])->name('api.row_attributes');
Route::get('/carbon', [APIController::class, 'getCarbonData'])->name('api.carbon');
