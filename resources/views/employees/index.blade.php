<x-layout>
    <section>
        <h2>Employees</h2>
        <table class="card-list">
            <thead>
                <tr>
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company</th>
                    <th>Phone</th>
                    <th>E-Mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $employees as $employee)
                <tr>
                    <td class="card-img--small"><a href="/employees/{{ $employee->id }}"><i class="fa-solid fa-circle-user"></i></a></td>
                    <td><a href="/employees/{{ $employee->id }}">{{ $employee->first_name }}</a></td>
                    <td><a href="/employees/{{ $employee->id }}">{{ $employee->last_name }}</a></td>
                    <td>
                        @if (isset($employee->company_id))<a href="/companies/{{ $employee->company_id }}">{{  $employee->company->name }}</a>
                        @else No Company
                        @endif
                    </td>
                    <td>{{ $employee->phone }}</td>
                    <td><a href="mailto://{{ $employee->email }}">{{ $employee->email }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $employees->links('components.pagination') }}
        </div>
    </section>
</x-layout>