<x-layout>
    <h2>Viewing - {{ $company->name }}</h2>
    <form class="form" id="form-edit" class="edit-form" action="/companies/{{ $company->id }}/edit" method="post">
        @csrf
        @method("PATCH")
        <img src="{{ Vite::asset("resources/images/companies/logos/$company->logo") }}" alt="Logo of {{ $company->name }}">
        <label for="company_logo">
            <span>Logo</span>
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
        <div class="edit-controls">
            <button form="form-edit" type="submit">Save Changes</button>
            <button form="form-delete" type="submit">Delete Company</button>
        </div>
    </form>
    <form form="form-delete" action="/companies/{{ $company->id }}/del" method="POST">
        @csrf
        @method('DELETE')
    </form>
    <h2>Employees</h2>
    <table class="card-list">
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
                <td><button form="company-employee-remove" value="{{ $employee->id }}">Remove</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form form="employee-remove" action="/companies/removeemployee" method="POST">
        @csrf
        @method('PATCH')
    </form>
</x-layout>