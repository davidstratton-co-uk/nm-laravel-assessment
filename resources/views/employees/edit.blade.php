<x-layout>
    <section>
        <form action="/employees/{{ $employee->id }}/edit" method="POST">
            @csrf
            @method("UPDATE")

            <div class="employee-card-big">
                <h3>Viewing - {{ $employee->first_name }} {{ $employee->last_name }}</h3>
                <div>
                        <div class="employee-company">{{ $employee->company->name }}</div>
                        <div class="employee-phone">{{ $employee->phone }}</div>
                        <div class="employee-email">{{ $employee->email }}</div>
                </div>
            </div>
            <div class="company-controls">
                <button type="submit" id="employee-edit-btn" name="employee-edit-btn">Update Employee</Button>
            </div>
        </form>
        <form action="/employees/{{ $employee-id }}/del" method="POST">
            <button type="submit" id="employee-del-btn" name="employee-del-btn">Delete Employee</Button>
        </form>
    </section>
</x-layout>