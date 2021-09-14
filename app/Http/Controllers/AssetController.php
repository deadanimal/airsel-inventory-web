<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::all();
        return $assets;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $asset = new Asset;
        $asset->wams_assetid = $request->wams_assetid;
        $asset->rfidID = $request->rfidID;
        $asset->qr_code = $request->qr_code;
        $asset->asset_registration_id = $request->asset_registration_id;
        $asset->purchase_order_id = $request->purchase_order_id;
        $asset->save();
        return $asset;
    }

    public function show(Asset $asset)
    {
        return $asset;
    }

    public function edit(Asset $asset)
    {
        //
    }

    public function update(Request $request, Asset $asset)
    {
        $asset->wams_assetid = $request->wams_assetid;
        $asset->rfidID = $request->rfidID;
        $asset->qr_code = $request->qr_code;
        $asset->asset_registration_id = $request->asset_registration_id;
        $asset->purchase_order_id = $request->purchase_order_id;
        $asset->save();
        return $asset;
    }

    public function destroy(Asset $asset)
    {
        //
    }
}
