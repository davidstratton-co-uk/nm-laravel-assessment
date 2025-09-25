<x-layout>
    <h2 class="edit-heading">Viewing - {{ $employee->first_name }} {{ $employee->last_name }}<a class="edit-link" href="/employees/{{ $employee->id }}/edit">Edit User</a></h2>
        <div class="card-big">
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
        <div class="card-controls">
            <a class="edit-link" href="/employees/{{ $employee->id }}/edit">Switch to Edit User</a>
        </div>
</x-layout>