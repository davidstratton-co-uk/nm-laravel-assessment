<x-layout>
    <section>
        <h3>Employees</h3>
        <div>
            @foreach ( $employees as $employee)
            <div class="employee-card">
                <a class="employee-link" href="/employees/{{ $employee->id }}"></a>
                <div class="employee-details">
                    <div class="employee-first_name">{{ $employee->first_name }}</div>
                    <div class="employee-last_name">{{ $employee->last_name }}</div>
                    <div class="employee-company">
                    @if (isset($employee->company_id))<a href="/companies/{{ $employee->company_id }}">{{  $employee->company->name }}</a>
                    @else <span>No Company</span>
                    @endif
                    </div>
                </div>
            </div>
            @endforeach
            <div>
            {{ $employees->links('components.pagination') }}
            </div>
        </div>
    </section>
</x-layout>