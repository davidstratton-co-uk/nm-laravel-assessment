<x-layout>
    <h2>Viewing - {{ $company->name }}</h2>
    <form class="form" id="form-edit" class="edit-form" action="/companies/{{ $company->id }}/edit" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <img src="
            @if ($company->logo)
                {{ asset('uploads/images/' . $company->logo) }}
            @else 
                {{ asset('uploads/images/default/logo-5.webp') }}
            @endif
        "
        alt="Logo of {{ $company->name }}">
        <label for="logo">
            <span>Logo</span>
            <input type="file" name="logo" id="logo" value={{  old('logo') }}>
        </label>
        <label for="name">
            <span>Name</span>
            <input type="text" id="name" name="name" value="{{ old('name', $company->name ) }}">
        </label>
        <label for="email">
            <span>E-Mail</span>
            <input type="text" id="email" name="email" value="{{ old('email', $company->email ) }}">
        </label>
        <label for="website">
            <span>Website</span>
            <input type="text" id="website" name="website" value="{{ old('website', $company->website ) }}">
        </label>
        <div class="edit-controls">
            <button form="form-edit" type="submit">Save Changes</button>
            <button form="form-delete" type="submit">Delete Company</button>
        </div>
        @if ($errors->any())
            <ul class="msg">
                @foreach ($errors->all() as $error )
                <li class="msg-error">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @session('success')
            <ul class="msg">
                <li class="msg-success">{{ $value }}</li>
            </ul>
        @endsession
    </form>
    <form form="form-delete" action="/companies/{{ $company->id }}" method="POST">
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
                <td><button type="submit" form="employee-unemploy" formaction="/employees/{{ $employee->id }}/unemploy">Delist</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form id="employee-unemploy" action="/employees/unemploy" method="POST">
        @csrf
        @method('PATCH')
    </form>
</x-layout>