<x-layout>
    <section>
        <form action="/employees/create" method="POST">
            @csrf
            <div class="employee-card-big">
                <h2>Creating New Employee  </h2>
                <div>
                    <div class="form-group">
                        <label class="form-label" for="employee_first_name">
                            <span>First Name:</span>
                            <input type="text" id="employee_first_name" name="employee_first_name">
                        </label>
                        <label class="form-label" for="employee_last_name">
                            <span>Last Name:</span>
                            <input type="text" id="employee_last_name" name="employee_last_name">
                        </label>
                    </div>
                    <label class="form-label" for="employee_company">
                        <span>Company:</span>
                        <input type="text" id="employee_company" name="employee_company">
                    </label>
                    <label class="form-label" for="employee_phone">
                        <span>Phone:</span>
                        <input type="text" id="employee_phone" name="employee_phone">
                    </label>
                    <label class="form-label" for="employee_email">
                        <span>Email:</span>
                        <input type="text" id="employee_email" name="employee_email">
                    </label>
                </div>
            </div>
            <div class="form-controls">
                <button type="submit" class="form-btn">Create Employee</Button>
            </div>
        </form>
    </section>
</x-layout>