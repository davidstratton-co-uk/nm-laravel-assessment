<x-layout>
    <section>
        <form id="company-edit" action="/companies/{{ $company->id }}/edit" method="post">
            @csrf
            @method("PATCH")
            <div class="card-big">
                <h2>Viewing - {{ $company->name }}</h2>
                <img src="{{ Vite::asset("resources/images/companies/logos/$company->logo") }}" alt="Logo of {{ $company->name }}">
                <div>
                    <label for="company_logo">
                        <span>Name</span>
                        <input type="text" id="company_logo" name="company_logo" value="{{ $company->logo }}">
                    </label>
                    <label for="company_name">
                        <span>Name</span>
                        <input type="text" id="company_name" name="company_name" value="{{ $company->name }}">
                    </label>
                    <label for="company_email">
                        <span>E-Mail</span>
                        <input type="text" id="company_email" name="company_email" value="{{ $company->email }}">
                    </label>
                    <label for="company_website">
                        <span>Website</span>
                        <input type="text" id="company_website" name="company_website" value="{{ $company->website }}">
                    </label>
                </div>
                <table class="company-employee-list">
                    <caption>List of Employees</caption>
                    <thead>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>    
                    </thead>
                    <tbody>
                        @foreach($company->employees as $employee)
                        <tr>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->email }}</td>
                            <td><a href="/employees/{{ $employee->id }}/edit">Edit</a></td>
                            <td><button form="company-employee-remove" value="{{ $employee->id }}" disabled>Remove</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="form-edit-controls">
                <button form="company-edit" type="submit" id="company-edit-btn" name="company-edit-btn">Submit Edit</button>
            </div>
        </form>
        <form form="company-delete" action="/companies/{{ $company->id }}/del" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" id="company-del-btn" name="company-del-btn">Delete</button>
        </form>
        <form form="company-employee-remove" action="/employee/remove" method="POST">
            @csrf
            @method('PATCH')
        </form>
    </section>
</x-layout>