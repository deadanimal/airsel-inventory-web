<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function index()
    {
        $purchaseOrders = PurchaseOrder::all();
        return $purchaseOrders;
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $purchaseOrder = new PurchaseOrder;
        $purchaseOrder->PO_number = $request->PO_number;
        $purchaseOrder->change_order_num = $request->change_order_num;
        $purchaseOrder->change_order_status = $request->change_order_status;
        $purchaseOrder->description = $request->description;
        $purchaseOrder->procurement_bu = $request->procurement_bu;
        $purchaseOrder->sold_to_le_name = $request->sold_to_le_name;
        $purchaseOrder->buyer = $request->buyer;
        $purchaseOrder->supplier_number = $request->supplier_number;
        $purchaseOrder->supplier_site_code = $request->supplier_site_code;
        $purchaseOrder->address_name = $request->address_name;
        $purchaseOrder->address_line_1 = $request->address_line_1;
        $purchaseOrder->address_line_2 = $request->address_line_2;
        $purchaseOrder->address_line_3 = $request->address_line_3;
        $purchaseOrder->city = $request->city;
        $purchaseOrder->state = $request->state;
        $purchaseOrder->postal_code = $request->postal_code;
        $purchaseOrder->country = $request->country;
        $purchaseOrder->con_first_name = $request->con_first_name;
        $purchaseOrder->con_last_name = $request->con_last_name;
        $purchaseOrder->con_email_address = $request->con_email_address;
        $purchaseOrder->con_mobile_number = $request->con_mobile_number;
        $purchaseOrder->con_phone_number = $request->con_phone_number;
        $purchaseOrder->supplier_contact_name = $request->supplier_contact_name;
        $purchaseOrder->line_number = $request->line_number;
        $purchaseOrder->sch_number = $request->sch_number;
        $purchaseOrder->dist_number = $request->dist_number;
        $purchaseOrder->line_desc = $request->line_desc;
        $purchaseOrder->order_qty = $request->order_qty;
        $purchaseOrder->uom_code = $request->uom_code;
        $purchaseOrder->order_qty_base = $request->order_qty_base;
        $purchaseOrder->base_uom_code = $request->base_uom_code;
        $purchaseOrder->requested_date = $request->requested_date;
        $purchaseOrder->ship_to_org_code = $request->ship_to_org_code;
        $purchaseOrder->subinv_code = $request->subinv_code;
        $purchaseOrder->ship_loc_code = $request->ship_loc_code;
        $purchaseOrder->line_type = $request->line_type;
        $purchaseOrder->line_status = $request->line_status;
        $purchaseOrder->save();

        return $purchaseOrder;
    }
    public function show(PurchaseOrder $purchaseOrder)
    {
        return $purchaseOrder;
    }
    public function edit(PurchaseOrder $purchaseOrder)
    {
        //
    }
    public function update(Request $request, PurchaseOrder $purchaseOrder)
    {
        $purchaseOrder->PO_number = $request->PO_number;
        $purchaseOrder->change_order_num = $request->change_order_num;
        $purchaseOrder->change_order_status = $request->change_order_status;
        $purchaseOrder->description = $request->description;
        $purchaseOrder->procurement_bu = $request->procurement_bu;
        $purchaseOrder->sold_to_le_name = $request->sold_to_le_name;
        $purchaseOrder->buyer = $request->buyer;
        $purchaseOrder->supplier_number = $request->supplier_number;
        $purchaseOrder->supplier_site_code = $request->supplier_site_code;
        $purchaseOrder->address_name = $request->address_name;
        $purchaseOrder->address_line_1 = $request->address_line_1;
        $purchaseOrder->address_line_2 = $request->address_line_2;
        $purchaseOrder->address_line_3 = $request->address_line_3;
        $purchaseOrder->city = $request->city;
        $purchaseOrder->state = $request->state;
        $purchaseOrder->postal_code = $request->postal_code;
        $purchaseOrder->country = $request->country;
        $purchaseOrder->con_first_name = $request->con_first_name;
        $purchaseOrder->con_last_name = $request->con_last_name;
        $purchaseOrder->con_email_address = $request->con_email_address;
        $purchaseOrder->con_mobile_number = $request->con_mobile_number;
        $purchaseOrder->con_phone_number = $request->con_phone_number;
        $purchaseOrder->supplier_contact_name = $request->supplier_contact_name;
        $purchaseOrder->line_number = $request->line_number;
        $purchaseOrder->sch_number = $request->sch_number;
        $purchaseOrder->dist_number = $request->dist_number;
        $purchaseOrder->line_desc = $request->line_desc;
        $purchaseOrder->order_qty = $request->order_qty;
        $purchaseOrder->uom_code = $request->uom_code;
        $purchaseOrder->order_qty_base = $request->order_qty_base;
        $purchaseOrder->base_uom_code = $request->base_uom_code;
        $purchaseOrder->requested_date = $request->requested_date;
        $purchaseOrder->ship_to_org_code = $request->ship_to_org_code;
        $purchaseOrder->subinv_code = $request->subinv_code;
        $purchaseOrder->ship_loc_code = $request->ship_loc_code;
        $purchaseOrder->line_type = $request->line_type;
        $purchaseOrder->line_status = $request->line_status;
        $purchaseOrder->save();

        return $purchaseOrder;
    }
    public function destroy(PurchaseOrder $purchaseOrder)
    {
        //
    }
}
