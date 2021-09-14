<?php

namespace App\Http\Controllers;

use App\Models\AssetRegistration;
use Illuminate\Http\Request;

class AssetRegistrationController extends Controller
{
    public function index()
    {
        $assetRegistrations = AssetRegistration::all();
        return $assetRegistrations;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $assetRegistration = new AssetRegistration;

        $assetRegistration->asset_owning_department = $request->asset_owning_department;
        $assetRegistration->asset_hierachy = $request->asset_hierachy;
        $assetRegistration->asset_categorization = $request->asset_categorization;
        $assetRegistration->asset_grouping = $request->asset_grouping;
        $assetRegistration->asset_detail_description = $request->asset_detail_description;
        $assetRegistration->asset_warranty_information = $request->asset_warranty_information;
        $assetRegistration->item_creation_id = $request->item_creation_id;
        $assetRegistration->serialized_item_id = $request->serialized_item_id;
        $assetRegistration->save();
        return $assetRegistration;
    }

    public function show(AssetRegistration $assetRegistration)
    {
        return $assetRegistration;
    }

    public function edit(AssetRegistration $assetRegistration)
    {
        //
    }

    public function update(Request $request, AssetRegistration $assetRegistration)
    {
        $assetRegistration->asset_owning_department = $request->asset_owning_department;
        $assetRegistration->asset_hierachy = $request->asset_hierachy;
        $assetRegistration->asset_categorization = $request->asset_categorization;
        $assetRegistration->asset_grouping = $request->asset_grouping;
        $assetRegistration->asset_detail_description = $request->asset_detail_description;
        $assetRegistration->asset_warranty_information = $request->asset_warranty_information;
        $assetRegistration->item_creation_id = $request->item_creation_id;
        $assetRegistration->serialized_item_id = $request->serialized_item_id;
        $assetRegistration->save();
        return $assetRegistration;
    }

    public function destroy(AssetRegistration $assetRegistration)
    {
        //
    }
}
