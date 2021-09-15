<?php

namespace App\Http\Controllers;

use App\Models\ItemCreation;
use Illuminate\Http\Request;

class ItemCreationController extends Controller
{
    public function index()
    {
        $itemCreations = ItemCreation::all();
        return $itemCreations;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $itemCreation = new ItemCreation;
        $itemCreation->item_number = $request->item_number;
        $itemCreation->organization_code = $request->organization_code;
        $itemCreation->organization_name = $request->organization_name;
        $itemCreation->item_class = $request->item_class;
        $itemCreation->item_class_description = $request->item_class_description;
        $itemCreation->legal_identity_code = $request->legal_identity_code;
        $itemCreation->legal_identity_name = $request->legal_identity_name;
        $itemCreation->short_description = $request->short_description;
        $itemCreation->long_description = $request->long_description;
        $itemCreation->primary_uom_code = $request->primary_uom_code;
        $itemCreation->primary_uom = $request->primary_uom;
        $itemCreation->secondary_uom_code = $request->secondary_uom_code;
        $itemCreation->secondary_uom = $request->secondary_uom;
        $itemCreation->item_status = $request->item_status;
        $itemCreation->catalog = $request->catalog;
        $itemCreation->category = $request->category;
        $itemCreation->minimum_qty = $request->minimum_qty;
        $itemCreation->maximum_qty = $request->maximum_qty;
        $itemCreation->inventory_item = $request->inventory_item;
        $itemCreation->transfer_order = $request->transfer_order;
        $itemCreation->purchaseable_item = $request->purchaseable_item;
        $itemCreation->shippable_item = $request->shippable_item;
        $itemCreation->save();

        return $itemCreation;
    }

    public function show(ItemCreation $itemCreation)
    {
        return $itemCreation;
    }

    public function edit(ItemCreation $itemCreation)
    {
        //
    }

    public function update(Request $request, ItemCreation $itemCreation)
    {
        $itemCreation->item_number = $request->item_number;
        $itemCreation->organization_code = $request->organization_code;
        $itemCreation->organization_name = $request->organization_name;
        $itemCreation->item_class = $request->item_class;
        $itemCreation->item_class_description = $request->item_class_description;
        $itemCreation->legal_identity_code = $request->legal_identity_code;
        $itemCreation->legal_identity_name = $request->legal_identity_name;
        $itemCreation->short_description = $request->short_description;
        $itemCreation->long_description = $request->long_description;
        $itemCreation->primary_uom_code = $request->primary_uom_code;
        $itemCreation->primary_uom = $request->primary_uom;
        $itemCreation->secondary_uom_code = $request->secondary_uom_code;
        $itemCreation->secondary_uom = $request->secondary_uom;
        $itemCreation->item_status = $request->item_status;
        $itemCreation->catalog = $request->catalog;
        $itemCreation->category = $request->category;
        $itemCreation->minimum_qty = $request->minimum_qty;
        $itemCreation->maximum_qty = $request->maximum_qty;
        $itemCreation->inventory_item = $request->inventory_item;
        $itemCreation->transfer_order = $request->transfer_order;
        $itemCreation->purchaseable_item = $request->purchaseable_item;
        $itemCreation->shippable_item = $request->shippable_item;
        $itemCreation->save();

        return $itemCreation;
    }

    public function destroy(ItemCreation $itemCreation)
    {
        //
    }
}
