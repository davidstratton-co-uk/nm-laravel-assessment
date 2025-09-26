<x-layout>
    <h2>Employees</h2>
    <table class="card-list">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Company</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Last Updated</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $employees as $employee)
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
                <td><a href="/employees/{{ $employee->id }}">{{ $employee->first_name }}</a></td>
                <td><a href="/employees/{{ $employee->id }}">{{ $employee->last_name }}</a></td>
                <td>
                    @if (isset($employee->company_id))<a href="/companies/{{ $employee->company_id }}">{{  $employee->company->name }}</a>
                    @else No Company
                    @endif
                </td>
                <td>{{ $employee->phone }}</td>
                <td><a href="mailto://{{ $employee->email }}">{{ $employee->email }}</a></td>
                <td>{{ $employee->updated_at }}</td>
                <td><a class="edit-btn" href="/employees/{{ $employee->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><button class="delete-btn" form="form-delete" formaction="/employees/{{  $employee->id }}" type="submit"><i class="fa-solid fa-trash"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $employees->links('components.pagination') }}
    </div>
    <form id="form-delete" action="/employees/" method="POST">
        @csrf
        @method('DELETE')
    </form>
</x-layout>