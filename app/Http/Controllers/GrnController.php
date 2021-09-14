<?php

namespace App\Http\Controllers;

use App\Models\Grn;
use Illuminate\Http\Request;


class GrnController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Grn $grn)
    {
        //
    }

    public function edit(Grn $grn)
    {
        //
    }

    public function update(Request $request, Grn $grn)
    {
        //
    }

    public function destroy(Grn $grn)
    {
        //
    }

    public function call_erp() 
    {   
        dd('asd');
        // $customers = Soap::to('https://api.example.com')
        // ->withBasicAuth('username', 'password')
        // ->Customers(['SortBy' => 'name']);
    }
}
