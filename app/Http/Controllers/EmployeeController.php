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

        if (request('orderby')) {

            $sortable_columns = ['first_name', 'last_name', 'company_id', 'email', 'phone', 'updated_at'];

            if (in_Array(request('orderby'), $sortable_columns)) {

                if (request('order') === 'desc' or request('order') === 'dsc' ) {
                    $query = Employee::orderBy(request('orderby'), 'desc');
                } else {
                    $query = Employee::orderBy(request('orderby'), 'asc');
                }

           }

           $query = $query->paginate(10)->withQueryString();

       } else {

        $query = Employee::paginate(10)->withQueryString();

       }

        return view('employees.index', [
            'employees' => $query
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
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required'],
            'company_id' => ['required'],
            'phone' => ['required'],
            'email' => ['required']
        ]);

        $company = Employee::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'company_id' => request('company_id') === "0" ? NULL : request('company_id') ,
            'phone' => request('phone'),
            'email' => request('email')
        ]);

        return redirect('/employees/' . $company->id)->with('success', 'Employee Created!');
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
            'employee' => $employee,
            'companies' => Company::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Employee $employee)
    {
        request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required'],
            'company_id' => ['required'],
            'phone' => ['required'],
            'email' => ['required']
        ]);

        $employee->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'company_id' => request('company_id'),
            'phone' => request('phone'),
            'email' => request('email')
        ]);

        return redirect('/employees/' . $employee->id)->with('success', 'Employee Updated!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function unemploy(Employee $employee)
    {

        $employee->update([
            'company_id' => NULL,
        ]);

        return redirect()->back()->with('success', 'Employee Delisted!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/employees')->with('success', 'Employee Deleted!');
    }
}
