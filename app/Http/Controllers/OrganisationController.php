<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    public function index()
    {
        $organization = Organization::all();
        return $organisation;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $organization = new Organization;
        $organization->location_name = $request->location_name;
        $organization->description = $request->description;
        $organization->inventory_organization = $request->inventory_organization;
        $organization->address = $request->address;
        $organization->address_line1 = $request->address_line1;
        $organization->address_line2 = $request->address_line2;
        $organization->address_line3 = $request->address_line3;
        $organization->postal_code = $request->postal_code;
        $organization->city = $request->city;
        $organization->state = $request->state;
        $organization->employee_id = $request->employee_id;
        $organization->save();
        return $organisation;
    }

    public function show(Organisation $organisation)
    {
        return $organisation;
    }

    public function edit(Organisation $organisation)
    {
        //
    }

    public function update(Request $request, Organisation $organisation)
    {
        $organization->location_name = $request->location_name;
        $organization->description = $request->description;
        $organization->inventory_organization = $request->inventory_organization;
        $organization->address = $request->address;
        $organization->address_line1 = $request->address_line1;
        $organization->address_line2 = $request->address_line2;
        $organization->address_line3 = $request->address_line3;
        $organization->postal_code = $request->postal_code;
        $organization->city = $request->city;
        $organization->state = $request->state;
        $organization->employee_id = $request->employee_id;
        $organization->save();
        return $organisation;
    }

    public function destroy(Organisation $organisation)
    {
        //
    }
}
