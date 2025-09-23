<x-layout>
    <section>
        <div class="employee-card-big">
            <header class="card-heading">
                <h3>Viewing - {{ $employee->first_name }} {{ $employee->last_name }}</h3>
                <a href="/employees/{{ $employee->id }}/edit">Edit User</a>
            </header>
            <dl>
                <dt>Name</dt>
                <dd>{{ $employee->first_name }} {{ $employee->last_name }}</dt>
                <dt>Company</dt>
                <dd>{{ $employee->company->name }}</dt>
                <dt>Phone</dt>
                <dd>{{ $employee->phone }}</dt>
                <dt>Email</dt>
                <dd>{{ $employee->email }}</dt>
            </dl>
        </div>
        <div class="form-controls">
            <a href="/employees/{{ $employee->id }}/edit">Edit User</a>
        </div>
    </section>
</x-layout>