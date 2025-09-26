<x-layout>
    <h2 class="edit-heading" >Viewing - {{ $company->name }} <a class="edit-link" href="/companies/{{ $company->id }}/edit">Edit Company</a></h2>
    <div class="card-big">   
        <img src="
        @if ($company->logo)
            {{ asset('uploads/images/' . $company->logo) }}
        @else 
            {{ asset('uploads/images/default/logo-5.webp') }}
        @endif
         " alt="Logo of {{ $company->name }}">
        <dl>
            <dt>Email</dt><dd>{{ $company->email }}</dd>
            <dt>Website</dt><dd>{{ $company->website }}</dd>
        </dl>
        @session('success')
            <ul class="msg">
                <li class="msg-success">{{ $value }}</li>
            </ul>
        @endsession
    </div>
    <h2 class="edit-heading" >Employees<a class="edit-link" href="/companies/{{ $company->id }}/edit">Edit Company</a></h2>
    <table class="card-list">
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
    <div class="card-controls">
        <a class="edit-link" href="/companies/{{ $company->id }}/edit">Switch to Edit Company</a>
    </div>
</x-layout>