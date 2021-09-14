<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        return $employee;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->employee_type = $request->employee_type;
        $employee->employee_status = $request->employee_status;
        $employee->job_title = $request->job_title;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->user_ID = $request->user_ID;
        $employee->country = $request->country;
        $employee->business_unit = $request->business_unit;
        $employee->phone_number = $request->phone_number;
        $employee->service_area = $request->service_area;
        $employee->joined_date = $request->joined_date;
        $employee->save();
        return $employee;
    }

    public function show(Employee $employee)
    {
        return $employee;
    }

    public function edit(Employee $employee)
    {
        $employee->employee_type = $request->employee_type;
        $employee->employee_status = $request->employee_status;
        $employee->job_title = $request->job_title;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->user_ID = $request->user_ID;
        $employee->country = $request->country;
        $employee->business_unit = $request->business_unit;
        $employee->phone_number = $request->phone_number;
        $employee->service_area = $request->service_area;
        $employee->joined_date = $request->joined_date;
        $employee->save();
        return $employee;
    }

    public function update(Request $request, Employee $employee)
    {
        //
    }

    public function destroy(Employee $employee)
    {
        //
    }
}
