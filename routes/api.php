<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// INT01
use App\Http\Controllers\PurchaseOrderController;
Route::get('/purchase-orders', [PurchaseOrderController::class, 'index']); 
Route::post('/purchase-orders', [PurchaseOrderController::class, 'store']);
Route::get('/purchase-orders/{purchase_order}', [PurchaseOrderController::class, 'show']);  
Route::put('/purchase-orders/{purchase_order}', [PurchaseOrderController::class, 'update']);  

// INT04
use App\Http\Controllers\MaterialRequestController;
Route::get('/material-requests', [MaterialRequestController::class, 'index']); 
Route::post('/material-requests', [MaterialRequestController::class, 'store']);
Route::get('/material-requests/{material_request}', [MaterialRequestController::class, 'show']); 
Route::put('/material-requests/{material_request}', [MaterialRequestController::class, 'update']);  

// INT07
use App\Http\Controllers\ItemCreationController;
Route::get('/item-creations', [ItemCreationController::class, 'index']); 
Route::post('/item-creations', [ItemCreationController::class, 'store']);
Route::get('/item-creations/{item_creation}', [ItemCreationController::class, 'show']); 
Route::put('/item-creations/{item_creation}', [ItemCreationController::class, 'update']); 


// INT09
use App\Http\Controllers\SerializedItemController;
Route::get('/serialized-items', [SerializedItemController::class, 'index']); 
Route::post('/serialized-items', [SerializedItemController::class, 'store']);
Route::get('/serialized-items/{serialized_item}', [SerializedItemController::class, 'show']); 
Route::put('/serialized-items/{serialized_item}', [SerializedItemController::class, 'update']);









// INT02
use App\Http\Controllers\GrnController;
Route::get('/grns', [GrnController::class, 'index']); 
Route::post('/grns', [GrnController::class, 'store']);
Route::get('/grns/{grn}', [GrnController::class, 'show']); 
Route::put('/grns/{grn}', [GrnController::class, 'update']); 






use App\Http\Controllers\AssetController;
Route::get('/assets', [AssetController::class, 'index']); 
Route::post('/assets', [AssetController::class, 'store']);
Route::get('/assets/{asset}', [AssetController::class, 'show']); 
Route::put('/assets/{asset}', [AssetController::class, 'update']); 

use App\Http\Controllers\AssetInventoryController;
Route::get('/asset-inventories', [AssetInventoryController::class, 'index']); 
Route::post('/asset-inventories', [AssetInventoryController::class, 'store']);
Route::get('/asset-inventories/{asset-inventory}', [AssetInventoryController::class, 'show']); 
Route::put('/asset-inventories/{asset-inventory}', [AssetInventoryController::class, 'update']);

use App\Http\Controllers\AssetRegistrationController;
Route::get('/asset-registrations', [AssetRegistrationController::class, 'index']); 
Route::post('/asset-registrations', [AssetRegistrationController::class, 'store']);
Route::get('/asset-registrations/{asset-registration}', [AssetRegistrationController::class, 'show']); 
Route::put('/asset-registrations/{asset-registration}', [AssetInventoryController::class, 'update']); 

use App\Http\Controllers\InventoryController;
Route::get('/inventories', [InventoryController::class, 'index']); 
Route::post('/inventories', [InventoryController::class, 'store']);
Route::get('/inventories/{inventory}', [InventoryController::class, 'show']); 
Route::put('/inventories/{inventory}', [InventoryController::class, 'update']); 

use App\Http\Controllers\InventoryLocatorController;
Route::get('/inventory-locators', [InventoryLocatorController::class, 'index']); 
Route::post('/inventory-locators', [InventoryLocatorController::class, 'store']);
Route::get('/inventory-locators/{inventory-locator}', [InventoryLocatorController::class, 'show']); 
Route::put('/inventory-locators/{inventory-locator}', [InventoryLocatorController::class, 'update']);

use App\Http\Controllers\LocatorController;
Route::get('/locators', [LocatorController::class, 'index']); 
Route::post('/locators', [LocatorController::class, 'store']);
Route::get('/locators/{locator}', [LocatorController::class, 'show']); 
Route::put('/locators/{locator}', [LocatorController::class, 'update']); 

use App\Http\Controllers\StockReceiveReturnController;
Route::get('/stock-receive-returns', [StockReceiveReturnController::class, 'index']); 
Route::post('/stock-receive-returns', [StockReceiveReturnController::class, 'store']);
Route::get('/stock-receive-returns/{stock-receive-return}', [StockReceiveReturnController::class, 'show']); 
Route::put('/stock-receive-returns/{stock-receive-return}', [StockReceiveReturnController::class, 'update']); 

use App\Http\Controllers\EmployeeController;
Route::get('/employees', [EmployeeController::class, 'index']); 
Route::post('/employees', [EmployeeController::class, 'store']);
Route::get('/employees/{employee}', [EmployeeController::class, 'show']); 
Route::put('/employees/{employee}', [EmployeeController::class, 'update']);

use App\Http\Controllers\EmployeeAssetController;
Route::get('/employee-assets', [EmployeeAssetController::class, 'index']); 
Route::post('/employee-assets', [EmployeeAssetController::class, 'store']);
Route::get('/employee-assets/{employee-asset}', [EmployeeAssetController::class, 'show']); 
Route::put('/employee-assets/{employee-asset}', [EmployeeAssetController::class, 'update']);

use App\Http\Controllers\OrganizationController;
Route::get('/organizations', [OrganizationController::class, 'index']); 
Route::post('/organizations', [OrganizationController::class, 'store']);
Route::get('/organizations/{organization}', [OrganizationController::class, 'show']); 
Route::put('/organizations/{organization}', [OrganizationController::class, 'update']);

use App\Http\Controllers\OrganizationInventoryController;
Route::get('/organization-inventories', [OrganizationInventoryController::class, 'index']); 
Route::post('/organization-inventories', [OrganizationInventoryController::class, 'store']);
Route::get('/organization-inventories/{organization-inventory}', [OrganizationInventoryController::class, 'show']); 
Route::put('/organization-inventories/{organization-inventory}', [OrganizationInventoryController::class, 'update']);