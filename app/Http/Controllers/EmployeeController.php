<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;

class EmployeeController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create', [
            'companies' => Company::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'employee_first_name' => ['required', 'min:3'],
            'employee_last_name' => ['required'],
            'employee_company' => ['required'],
            'employee_phone' => ['required'],
            'employee_email' => ['required']
        ]);

        $company = Employee::create([
            'first_name' => request('employee_first_name'),
            'last_name' => request('employee_last_name'),
            'company_id' => request('employee_company') == 0 ? NULL : request('employee_company') ,
            'phone' => request('employee_phone'),
            'email' => request('employee_email')
        ]);

        return redirect('/employees/' . $company->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', [
            'employee' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Employee $employee)
    {
        request()->validate([
            'employee_first_name' => ['required', 'min:3'],
            'employee_last_name' => ['required'],
            'employee_company' => ['required'],
            'employee_phone' => ['required'],
            'employee_email' => ['required']
        ]);

        $employee->update([
            'first_name' => request('employee_first_name'),
            'last_name' => request('employee_last_name'),
            'company_id' => request('employee_company'),
            'phone' => request('employee_phone'),
            'email' => request('employee_email')
        ]);

        return redirect('/employees/' . $employee->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/employees');
    }
}
