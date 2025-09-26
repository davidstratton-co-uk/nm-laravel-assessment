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
                    <td class="card-img--small">
                        <img src="
                            @if ($company->logo)
                                {{ asset('uploads/images/' . $company->logo) }}
                            @else 
                                {{ asset('uploads/images/default/logo-5.webp') }}
                            @endif
                            "
                            alt="Logo of {{ $company->name }}
                        ">
                    </td>
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
                    <td class="card-img--small">
                        <img src="
                            @if ($employee->avatar)
                                {{ asset('uploads/images/' . $employee->avatar) }}
                            @else 
                                {{ asset('uploads/images/default/avatar.webp') }}
                            @endif
                            "
                            alt="Profile Picture of {{ $employee->name }}
                        ">
                    </td>
                    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                    <td>{{ $employee->updated_at }}</td>
                    <td><a class="edit-btn" href="/employees/{{ $employee->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>