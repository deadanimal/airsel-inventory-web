<?php

namespace App\Http\Controllers;

use App\Models\InventoryLocator;
use Illuminate\Http\Request;

class InventoryLocatorController extends Controller
{
    public function index()
    {
        $inventoryLocator = InventoryLocation::all();
        return $inventoryLocator;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $inventory = new InventoryLocator;
        $inventory->inventory_id = $request->inventory_id;
        $inventory->locator_id = $request->locator_id;
        $inventory->save();
        return $inventoryLocator;
    }

    public function show(InventoryLocator $inventoryLocator)
    {
        return $inventoryLocator;
    }

    public function edit(InventoryLocator $inventoryLocator)
    {
        //
    }

    public function update(Request $request, InventoryLocator $inventoryLocator)
    {
        $inventory->inventory_id = $request->inventory_id;
        $inventory->locator_id = $request->locator_id;
        $inventory->save();
        return $inventoryLocator;
    }

    public function destroy(InventoryLocator $inventoryLocator)
    {
        //
    }
}
