<x-layout>
    <section>
        <div class="employee-card-big">
            <h3>Viewing - {{ $employee->first_name }} {{ $employee->last_name }}</h3>
            <div>
                    <div class="employee-company">{{ $employee->company->name }}</div>
                    <div class="employee-phone">{{ $employee->phone }}</div>
                    <div class="employee-email">{{ $employee->email }}</div>
            </div>
        </div>
        <div class="company-controls">
            <a href="/employees/{{ $employee->id }}/edit">Edit</a>
        </div>
    </section>
</x-layout>