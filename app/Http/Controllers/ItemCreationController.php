<?php

namespace App\Http\Controllers;

use App\Models\ItemCreation;
use Illuminate\Http\Request;

class ItemCreationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemCreations = TtemCreation::all();
        return $itemCreations;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemCreation  $itemCreation
     * @return \Illuminate\Http\Response
     */
    public function show(ItemCreation $itemCreation)
    {
        return $itemCreation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemCreation  $itemCreation
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemCreation $itemCreation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemCreation  $itemCreation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemCreation $itemCreation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemCreation  $itemCreation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemCreation $itemCreation)
    {
        //
    }
}
