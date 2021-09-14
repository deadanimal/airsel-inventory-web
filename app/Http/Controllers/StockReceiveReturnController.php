<?php

namespace App\Http\Controllers;

use App\Models\StockReceiveReturn;
use Illuminate\Http\Request;

class StockReceiveReturnController extends Controller
{
    public function index()
    {
        $stockReceiveReturn = StockReceiveReturn::all();
        return $stockReceiveReturn;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $stockReceiveReturn = new StockReceiveReturn;
        $stockReceiveReturn->grn_id = $request->grn_id;
        $stockReceiveReturn->purchase_order_id = $request->purchase_order_id;
        $stockReceiveReturn->employee_id = $request->employee_id;
        $stockReceiveReturn->save();
        return $stockReceiveReturn;
    }

    public function show(StockReceiveReturn $stockReceiveReturn)
    {
        return $stockReceiveReturn;
    }

    public function edit(StockReceiveReturn $stockReceiveReturn)
    {
        //
    }

    public function update(Request $request, StockReceiveReturn $stockReceiveReturn)
    {
        $stockReceiveReturn->grn_id = $request->grn_id;
        $stockReceiveReturn->purchase_order_id = $request->purchase_order_id;
        $stockReceiveReturn->employee_id = $request->employee_id;
        $stockReceiveReturn->save();
        return $stockReceiveReturn;
    }

    public function destroy(StockReceiveReturn $stockReceiveReturn)
    {
        //
    }
}
