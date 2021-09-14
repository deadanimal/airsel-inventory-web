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


// INT09
use App\Http\Controllers\SerializedItemController;
Route::get('/serialized-items', [SerializedItemController::class, 'index']); 
Route::post('/serialized-items', [SerializedItemController::class, 'store']);
Route::get('/serialized-items/{serialized_item}', [SerializedItemController::class, 'show']); 









// INT02
use App\Http\Controllers\GrnController;
Route::get('/grns', [GrnController::class, 'index']); 
Route::post('/grns', [GrnController::class, 'store']);
Route::get('/grns/{grn}', [GrnController::class, 'show']); 
Route::get('/grns-call-erp', [GrnController::class, 'call_erp']); 

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
