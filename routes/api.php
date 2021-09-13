<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// INT01
use App\Http\Controllers\PurchaseOrderController;
Route::get('/purchase-orders', [PurchaseOrderController::class, 'index']); 
Route::post('/purchase-orders', [PurchaseOrderController::class, 'store']);
Route::get('/purchase-orders/{purchase_order}', [PurchaseOrderController::class, 'show']);  

// INT04
use App\Http\Controllers\MaterialRequestController;
Route::get('/material-requests', [MaterialRequestController::class, 'index']); 
Route::post('/material-requests', [MaterialRequestController::class, 'store']);
Route::get('/material-requests/{material_request}', [MaterialRequestController::class, 'show']);  

// INT07
use App\Http\Controllers\ItemCreationController;
Route::get('/item-creations', [ItemCreationController::class, 'index']); 
Route::post('/item-creations', [ItemCreationController::class, 'store']);
Route::get('/item-creations/{item_creation}', [ItemCreationController::class, 'show']); 


// Route::group(function () {    
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });

//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
