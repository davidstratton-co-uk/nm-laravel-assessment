<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;

class DashboardController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.index', [
            'companies' => Company::orderBy('updated_at','DESC')->paginate(5),
            'employees' => Employee::orderBy('updated_at','DESC')->paginate(5)
        ]);
    }

}
