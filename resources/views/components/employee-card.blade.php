@props(['employee'])

<div class="employee-card">
    <a class="employee-link" href="/company/{{ $employee['id'] }}"></a>
    <div class="employee-details">
        <div class="employee-first_name">{{ $employee['first_name'] }}</div>
        <div class="employee-last_name">{{ $employee['last_name'] }}</div>
        <div class="employee-company"><a href="/company/{{ $employee['company_id'] }}">{{  $employee['company_name'] }}</a></div>
    </div>
</div>