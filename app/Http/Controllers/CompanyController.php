<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Support\Facades\File;

class CompanyController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $query = Company::withCount('employees');

        if (request('orderby')) {

            $sortable_columns = ['name', 'employees_count', 'email', 'updated_at'];

            if (in_Array(request('orderby'), $sortable_columns)) {

                if (request('order') === 'desc' or request('order') === 'dsc' ) {
                    $query = $query->orderBy(request('orderby'), 'desc');
                } else {
                    $query = $query->orderBy(request('orderby'), 'asc');
                }

           }
       }
        
        $query = $query->paginate(10)->withQueryString();

        return view('companies.index', [
            'companies' => $query
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
            'name' => ['required', 'min:3'],
            'logo' => ['image','max:2048'],
            'email' => ['required','email'],
            'website' => ['required','url']
        ]);

        $logoName = NULL;

        if (request('logo')){
            $logoName = time().'.'.request('logo')->extension();
            request('logo')->move(public_path('uploads/images'), $logoName);
        }

        $company = Company::create([
            'name' => request('name'),
            'logo' => $logoName,
            'email' => request('email'),
            'website' => request('website')
        ]);

        return redirect('/companies/' . $company->id)->with('success', 'Company Created');
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
            'name' => ['required', 'min:3'],
            'logo' => ['image','max:2048'],
            'email' => ['required','email'],
            'website' => ['required','url']
        ]);

        $logoName = $company->logo;

        if (request()->hasFile('company_logo')) {
            
            if ($company->logo) {
            
                $currentLogo = public_path('uploads/images/' . $company->logo);
            
                if (File::exists($currentLogo)) {
                    File::delete($currentLogo);
                }
            }

            $logoName = time().'.'.request('logo')->extension();
            request('logo')->move(public_path('uploads/images'), $logoName);
        }

        $company->update([
            'name' => request('name'),
            'logo' => $logoName,
            'email' => request('email'),
            'website' => request('website')
        ]);

        return redirect('/companies/' . $company->id)->with('success', 'Company Updated!');
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
