<?php

namespace App\Http\Controllers;

use App\Models\SerializedItem;
use Illuminate\Http\Request;

class SerializedItemController extends Controller
{
    public function index()
    {
        $serializedItems = SerializedItem::all();
        return $serializedItems;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $serializedItem = new SerializedItem;
        $serializedItem->organization_name = $request->organization_name;
        $serializedItem->source_code = $request->source_code;
        $serializedItem->source_header_ID = $request->source_header_ID;
        $serializedItem->source_line_ID = $request->source_line_ID;
        $serializedItem->transaction_date = $request->transaction_date;
        $serializedItem->item_number = $request->item_number;
        $serializedItem->subinventory_code = $request->subinventory_code;
        $serializedItem->locator_rack = $request->locator_rack;
        $serializedItem->locator_row = $request->locator_row;
        $serializedItem->transaction_quantity = $request->transaction_quantity;
        $serializedItem->transaction_uom = $request->transaction_uom;
        $serializedItem->transaction_type_name = $request->transaction_type_name;
        $serializedItem->transaction_reference = $request->transaction_reference;
        $serializedItem->dst_segment1 = $request->dst_segment1;
        $serializedItem->dst_segment2 = $request->dst_segment2;
        $serializedItem->dst_segment3 = $request->dst_segment3;
        $serializedItem->dst_segment4 = $request->dst_segment4;
        $serializedItem->dst_segment5 = $request->dst_segment5;
        $serializedItem->dst_segment6 = $request->dst_segment6;
        $serializedItem->dst_segment7 = $request->dst_segment7;
        $serializedItem->use_current_cost = $request->use_current_cost;
        $serializedItem->transaction_cost_identifier = $request->transaction_cost_identifier;
        $serializedItem->cost_component_code = $request->cost_component_code;
        $serializedItem->cost = $request->cost;
        $serializedItem->serial_num_identifier = $request->serial_num_identifier;
        $serializedItem->save();
        return $serializedItem;
    }

    public function show(SerializedItem $serializedItem)
    {
        return $serializedItem;
    }

    public function edit(SerializedItem $serializedItem)
    {
        //
    }

    public function update(Request $request, SerializedItem $serializedItem)
    {
        //
    }

    public function destroy(SerializedItem $serializedItem)
    {
        //
    }
}
