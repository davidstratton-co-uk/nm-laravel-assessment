<x-layout>
    <h2>Creating Employee</h2>
    <div class="form-container">
        <form class="form" action="/employees/create" method="POST">
            @csrf
            <label for="employee_first_name">
                <span>First Name</span>
                <input type="text" id="employee_first_name" name="employee_first_name">
            </label>
            <label for="employee_last_name">
                <span>Last Name</span>
                <input type="text" id="employee_last_name" name="employee_last_name">
            </label>
            <label for="employee_company">
                <span>Company</span>
                <select name="employee_company" id="employee_company">
                    <option value="0">No Company</option>
                    @foreach ( $companies as $company )
                    <option value="{{ $company->id }}">{{ $company->name }}</option>    
                    @endforeach
                </select>
            </label>
            <label for="employee_phone">
                <span>Phone</span>
                <input type="text" id="employee_phone" name="employee_phone">
            </label>
            <label for="employee_email">
                <span>Email:</span>
                <input type="text" id="employee_email" name="employee_email">
            </label>
            <div class="form-controls">
                <button type="submit" class="form-btn">Create Employee</Button>
            </div>
        </form>
    </div>
</x-layout>