<x-layout>
    <h2>Editing - {{ $employee->first_name }} {{ $employee->last_name }}</h2>
    <form class="form" id="form-edit" action="/employees/{{ $employee->id }}/edit" method="POST">
        @csrf
        @method('PATCH')
        <label for="employee_first_name">
            <span>First Name</span>
            <input type="text" id="employee_first_name" name="employee_first_name" value="{{ $employee->first_name }}">
        </label>
        <label for="employee_last_name">
            <span>Last Name</span>
            <input type="text" id="employee_last_name" name="employee_last_name" value="{{ $employee->last_name }}">
        </label>
        <label for="employee_company">
            <span>Company</span>
            <input type="text" id="employee_company" name="employee_company" value="{{ $employee->company->id }}">
        </label>
        <label for="employee_phone">
            <span>Phone</span>
            <input type="text" id="employee_phone" name="employee_phone" value="{{ $employee->phone }}">
        </label>
        <label for="employee_email">
            <span>Email</span>
            <input type="text" id="employee_email" name="employee_email" value="{{ $employee->email }}">
        </label>
        <div class="edit-controls">
            <button form="form-edit" type="submit">Save Changes</Button>
            <button form="form-delete" type="submit">Delete Employee</Button>
        </div>
    </form>
    <form id="form-delete" action="/employees/{{ $employee->id }}/del" method="POST">
        @csrf
        @method('DELETE')
    </form>
</x-layout>