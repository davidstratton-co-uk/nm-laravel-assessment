@props(['employee'])

<div class="employee-card">
    <a class="employee-link" href="/employees/{{ $employee->id }}"></a>
    <div class="employee-details">
        <div class="employee-first_name">{{ $employee->first_name }}</div>
        <div class="employee-last_name">{{ $employee->last_name }}</div>
        <div class="employee-company"><a href="/companies/{{ $employee->company->id }}">{{  $employee->company->name }}</a></div>
    </div>
</div>