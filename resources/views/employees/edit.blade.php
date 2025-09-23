<x-layout>
    <section>
        <form id="form-edit" action="/employees/{{ $employee->id }}/edit" method="POST">
            @csrf
            @method('PATCH')

            <div class="employee-card-big">
                <h3>Editing - {{ $employee->first_name }} {{ $employee->last_name }}</h3>
                <div>
                    <div class="form-group">
                        <label class="form-label" for="employee_first_name">
                            <span>First Name:</span>
                            <input type="text" id="employee_first_name" name="employee_first_name" value="{{ $employee->first_name }}">
                        </label>
                        <label class="form-label" for="employee_last_name">
                            <span>Last Name:</span>
                            <input type="text" id="employee_last_name" name="employee_last_name" value="{{ $employee->last_name }}">
                        </label>
                    </div>
                    <label class="form-label" for="employee_company">
                        <span>Company:</span>
                        <input type="text" id="employee_company" name="employee_company" value="{{ $employee->company->id }}">
                    </label>
                    <label class="form-label" for="employee_phone">
                        <span>Phone:</span>
                        <input type="text" id="employee_phone" name="employee_phone" value="{{ $employee->phone }}">
                    </label>
                    <label class="form-label" for="employee_email">
                        <span>Email:</span>
                        <input type="text" id="employee_email" name="employee_email" value="{{ $employee->email }}">
                    </label>
                </div>
                </div>
            </div>
            <div class="form-controls">
                <button form="form-edit" type="submit" class="form-btn">Update Employee</Button>
                <button form="form-del" type="submit" class="form-btn-del">Delete Employee</Button>
            </div>
        </form>
        <form id="form-del" action="/employees/{{ $employee->id }}/del" method="POST">
            @csrf
            @method('DELETE')
        </form>
    </section>
</x-layout>