<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all();
        return $inventory;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $inventory = new Inventory;
        $inventory->inventory_name = $request->inventory_name;
        $inventory->description = $request->description;
        $inventory->save();
        return $inventory;
    }

    public function show(Inventory $inventory)
    {
        return $inventory;
    }

    public function edit(Inventory $inventory)
    {
        //
    }

    public function update(Request $request, Inventory $inventory)
    {
        $inventory->inventory_name = $request->inventory_name;
        $inventory->description = $request->description;
        $inventory->save();
        return $inventory;
    }

    public function destroy(Inventory $inventory)
    {
        //
    }
}
