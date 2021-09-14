<?php

namespace App\Http\Controllers;

use App\Models\OrganisationInventory;
use Illuminate\Http\Request;

class OrganisationInventoryController extends Controller
{
    public function index()
    {
        $organizationInventory = OrganizationInventory::all();
        return $organisationInventory;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $organizationInventory = new OrganizationInventory;
        $organizationInventory->organization_id = $request->organization_id;
        $organizationInventory->inventory_id = $request->inventory_id;
        $organizationInventory->save();
        return $organisationInventory;
    }

    public function show(OrganisationInventory $organisationInventory)
    {
        return $organisationInventory;
    }

    public function edit(OrganisationInventory $organisationInventory)
    {
        //
    }

    public function update(Request $request, OrganisationInventory $organisationInventory)
    {
        $organizationInventory->organization_id = $request->organization_id;
        $organizationInventory->inventory_id = $request->inventory_id;
        $organizationInventory->save();
        return $organisationInventory;
    }

    public function destroy(OrganisationInventory $organisationInventory)
    {
        //
    }
}
