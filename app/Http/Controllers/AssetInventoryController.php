<?php

namespace App\Http\Controllers;

use App\Models\AssetInventory;
use Illuminate\Http\Request;

class AssetInventoryController extends Controller
{
    public function index()
    {
        $assetInventories = new AssetInventory;
        return $assetInventories;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $assetInventory = new AssetInventory;
        $assetInventory->asset_id = $request->asset_id;
        $assetInventory->inventory_id = $request->inventory_id;
        $assetInventory->save();
        return $assetInventory;
    }

    public function show(AssetInventory $assetInventory)
    {
        return $assetInventory;
    }

    public function edit(AssetInventory $assetInventory)
    {
        $assetInventory->asset_id = $request->asset_id;
        $assetInventory->inventory_id = $request->inventory_id;
        $assetInventory->save();
        return $assetInventory;
    }

    public function update(Request $request, AssetInventory $assetInventory)
    {
        //
    }

    public function destroy(AssetInventory $assetInventory)
    {
        //
    }
}
