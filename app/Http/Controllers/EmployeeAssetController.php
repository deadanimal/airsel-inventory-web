<?php

namespace App\Http\Controllers;

use App\Models\EmployeeAsset;
use Illuminate\Http\Request;

class EmployeeAssetController extends Controller
{
    public function index()
    {
        $employeeAsset = EmployeeAsset::all();
        return $employeeAsset;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $employeeAsset = new EmployeeAsset;
        $employeeAsset->employee_id = $request->employee_id;
        $employeeAsset->asset_id = $request->asset_id;
        $employeeAsset->save();
        return $employeeAsset;
    }

    public function show(EmployeeAsset $employeeAsset)
    {
        return $employeeAsset;
    }

    public function edit(EmployeeAsset $employeeAsset)
    {
        //
    }

    public function update(Request $request, EmployeeAsset $employeeAsset)
    {
        $employeeAsset->employee_id = $request->employee_id;
        $employeeAsset->asset_id = $request->asset_id;
        $employeeAsset->save();
        return $employeeAsset;
    }

    public function destroy(EmployeeAsset $employeeAsset)
    {
        //
    }
}
