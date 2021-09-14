<?php

namespace App\Http\Controllers;

use App\Models\MaterialRequest;
use Illuminate\Http\Request;

class MaterialRequestController extends Controller
{
    public function index()
    {
        $materialRequests = MaterialRequest::all();
        return $materialRequests;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $materialRequest = new MaterialRequest;
        $materialRequest->organization_code = $request->organization_code;
        $materialRequest->organization_name = $request->organization_name;
        $materialRequest->movement_request_number = $request->movement_request_number;
        $materialRequest->movement_request_type = $request->movement_request_type;
        $materialRequest->description = $request->description;
        $materialRequest->required_date = $request->required_date;
        $materialRequest->transaction_type = $request->transaction_type;
        $materialRequest->status = $request->status;
        $materialRequest->source_inventory = $request->source_inventory;
        $materialRequest->source_locator = $request->source_locator;
        $materialRequest->destination_inventory = $request->destination_inventory;
        $materialRequest->destination_locator = $request->destination_locator;
        $materialRequest->destination_action = $request->destination_action;
        $materialRequest->dst_segment1 = $request->dst_segment1;
        $materialRequest->dst_segment2 = $request->dst_segment2;
        $materialRequest->dst_segment3 = $request->dst_segment3;
        $materialRequest->dst_segment4 = $request->dst_segment4;
        $materialRequest->dst_segment5 = $request->dst_segment5;
        $materialRequest->dst_segment6 = $request->dst_segment6;
        $materialRequest->dst_segment7 = $request->dst_segment7;
        $materialRequest->line_number = $request->line_number;
        $materialRequest->item = $request->item;
        $materialRequest->requested_quantity = $request->requested_quantity;
        $materialRequest->uom_name = $request->uom_name;
        $materialRequest->created_by = $request->created_by;
        $materialRequest->last_updated_date = $request->last_updated_date;
        $materialRequest->destination_account_id = $request->destination_account_id;
        $materialRequest->inventory_id = $request->inventory_id;      
        $materialRequest->save();

        return $materialRequest;
    }

    public function show(MaterialRequest $materialRequest)
    {
        return $materialRequest;
    }

    public function edit(MaterialRequest $materialRequest)
    {
        //
    }

    public function update(Request $request, MaterialRequest $materialRequest)
    {
        $materialRequest->organization_code = $request->organization_code;
        $materialRequest->organization_name = $request->organization_name;
        $materialRequest->movement_request_number = $request->movement_request_number;
        $materialRequest->movement_request_type = $request->movement_request_type;
        $materialRequest->description = $request->description;
        $materialRequest->required_date = $request->required_date;
        $materialRequest->transaction_type = $request->transaction_type;
        $materialRequest->status = $request->status;
        $materialRequest->source_inventory = $request->source_inventory;
        $materialRequest->source_locator = $request->source_locator;
        $materialRequest->destination_inventory = $request->destination_inventory;
        $materialRequest->destination_locator = $request->destination_locator;
        $materialRequest->destination_action = $request->destination_action;
        $materialRequest->dst_segment1 = $request->dst_segment1;
        $materialRequest->dst_segment2 = $request->dst_segment2;
        $materialRequest->dst_segment3 = $request->dst_segment3;
        $materialRequest->dst_segment4 = $request->dst_segment4;
        $materialRequest->dst_segment5 = $request->dst_segment5;
        $materialRequest->dst_segment6 = $request->dst_segment6;
        $materialRequest->dst_segment7 = $request->dst_segment7;
        $materialRequest->line_number = $request->line_number;
        $materialRequest->item = $request->item;
        $materialRequest->requested_quantity = $request->requested_quantity;
        $materialRequest->uom_name = $request->uom_name;
        $materialRequest->created_by = $request->created_by;
        $materialRequest->last_updated_date = $request->last_updated_date;
        $materialRequest->destination_account_id = $request->destination_account_id;
        $materialRequest->inventory_id = $request->inventory_id;      
        $materialRequest->save();

        return $materialRequest;
    }

    public function destroy(MaterialRequest $materialRequest)
    {
        //
    }
}
