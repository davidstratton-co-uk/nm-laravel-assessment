<x-layout>
    <h2>Dashboard</h2>
    <div class="dashboard">
        <table class="card-list">
            <caption>Recently Updated Companies</caption>
            <thead>
                <tr>
                    <th></th>
                    <th>Company Name</th>
                    <th>Date Updated</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company )
                <tr>
                    <td>{{ $company->logo }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->updated_at }}</td>
                    <td><a class="edit-btn" href="/companies/{{ $company->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <table class="card-list">
            <caption>Recently Updated Employees</caption>
            <thead>
                <tr>
                    <th></th>
                    <th>Employee</th>
                    <th>Date Updated</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $employees as $employee )
                <tr>
                    <td>logo</td>
                    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                    <td>{{ $employee->updated_at }}</td>
                    <td><a class="edit-btn" href="/employees/{{ $employee->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>