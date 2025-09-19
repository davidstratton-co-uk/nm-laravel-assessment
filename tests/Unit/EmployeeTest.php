<?php

use \App\Models\Company;
use \App\Models\Employee;

test('belongs to a company', function () {
        $company = Company::factory()->create();
        $employee = Employee::factory()->create([
            'company_id' => $company->id,
        ]);

    expect($employee->company->is($company))->toBeTrue();
});
