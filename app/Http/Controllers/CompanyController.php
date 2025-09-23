<?php

namespace App\Http\Controllers;

use App\Models\Company;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('companies.index', [
            'companies' => Company::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'company_name' => ['required', 'min:3'],
            'company_logo' => ['required'],
            'company_email' => ['required'],
            'company_website' => ['required']
        ]);

        $company = Company::create([
            'name' => request('company_name'),
            'logo' => request('company_logo'),
            'email' => request('company_email'),
            'website' => request('company_website')
        ]);

        return redirect('/companies/' . $company->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('companies.show', [
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('companies.edit', [
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Company $company)
    {
        request()->validate([
            'company_name' => ['required', 'min:3'],
            'company_logo' => ['required'],
            'company_email' => ['required'],
            'company_website' => ['required']
        ]);

        $company->update([
            'name' => request('company_name'),
            'logo' => request('company_logo'),
            'email' => request('company_email'),
            'website' => request('company_website')
        ]);

        return redirect('/companies/' . $company->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect('/companies');
    }
}
