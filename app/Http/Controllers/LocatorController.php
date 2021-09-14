<?php

namespace App\Http\Controllers;

use App\Models\Locator;
use Illuminate\Http\Request;

class LocatorController extends Controller
{
    public function index()
    {
        $locator = Locator::all();
        return $locator;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $locator = new Locator;
        $locator->locator_control = $request->locator_control;
        $locator->locator_rack = $request->locator_rack;
        $locator->locator_row = $request->locator_row;
        $locator->validation = $request->validation;
        $locator->save();
        return $locator;
    }

    public function show(Locator $locator)
    {
        return $locator;
    }

    public function edit(Locator $locator)
    {
        //
    }

    public function update(Request $request, Locator $locator)
    {
        $locator->locator_control = $request->locator_control;
        $locator->locator_rack = $request->locator_rack;
        $locator->locator_row = $request->locator_row;
        $locator->validation = $request->validation;
        $locator->save();
        return $locator;
    }

    public function destroy(Locator $locator)
    {
        //
    }
}
