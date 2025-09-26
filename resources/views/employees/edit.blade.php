<x-layout>
    <h2>Editing - {{ $employee->first_name }} {{ $employee->last_name }}</h2>
    <form class="form" id="form-edit" action="/employees/{{ $employee->id }}/edit" method="POST">
        @csrf
        @method('PATCH')
        <label for="first_name">
            <span>First Name</span>
            <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $employee->first_name ) }}">
        </label>
        <label for="last_name">
            <span>Last Name</span>
            <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $employee->last_name ) }}">
        </label>
        <label for="company">
            <span>Company</span>
            <select name="company_id" id="company_id">
                <option value="0" 
                    @if ( old('company_id', $employee->company_id) == "0")
                        selected
                    @endif
                >No Company</option>
                @foreach ( $companies as $company )
                    <option value="{{ $company->id }}"
                        @if ( old('company_id', $employee->company_id) == $company->id)
                            selected
                        @endif
                    >{{ $company->name }}</option>    
                @endforeach
            </select>
        </label>
        <label for="phone">
            <span>Phone</span>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $employee->phone ) }}">
        </label>
        <label for="email">
            <span>Email</span>
            <input type="text" id="email" name="email" value="{{ old('email', $employee->email ) }}">
        </label>
        <div class="edit-controls">
            <button form="form-edit" type="submit">Save Changes</Button>
            <button form="form-delete" type="submit">Delete Employee</Button>
        </div>
        @if ($errors->any())
            <ul class="msg">
                @foreach ($errors->all() as $error )
                <li class="msg-error">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
    <form id="form-delete" action="/employees/{{ $employee->id }}/del" method="POST">
        @csrf
        @method('DELETE')
    </form>
</x-layout>