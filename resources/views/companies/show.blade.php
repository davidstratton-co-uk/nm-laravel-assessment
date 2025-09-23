<x-layout>
    <section>
        <div class="card-big">
            <header class="card-heading">
                <h3>Viewing - {{ $company->name }}</h3>
                <a href="/companies/{{ $company->id }}/edit">Edit Company</a>
            </header>
            <img src="{{ Vite::asset("resources/images/companies/logos/$company->logo") }}" alt="Logo of {{ $company->name }}">
            <dl>
                <dt>E-Mail</dt>
                <dd>{{ $company->email }}</dd>
                <dt>Website:</dt>
                <dd>{{ $company->website }}</dd>
            </dl>
            <table class="company-employee-list">
                <caption>List of Employees</caption>
                <thead>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach($company->employees as $employee)
                    <tr>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-controls">
            <a href="/companies/{{ $company->id }}/edit">Edit Company</a>
        </div>
    </section>
</x-layout>