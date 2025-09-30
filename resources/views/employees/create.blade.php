<x-layout>
    <h2>Creating Employee</h2>
    <form class="form" action="/employees/create" method="POST">
        @csrf
        <label for="first_name">
            <span>First Name</span>
            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}">
        </label>
        <label for="last_name">
            <span>Last Name</span>
            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
        </label>
        <label for="company">
            <span>Company</span>
        <select name="company_id" id="company_id">
            <option value="0" 
                @if ( old('company_id') === "0")
                    selected
                @endif
            >
            No Company
            </option>
            @foreach ( $companies as $company )
                <option value="{{ $company->id }}"
                    @if ( old('company_id') == $company->id || app('request')->input('company_id') == $company->id )
                        selected
                    @endif
                >{{ $company->name }}</option>    
            @endforeach
        </select>
        </label>
        <label for="phone">
            <span>Phone</span>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
        </label>
        <label for="email">
            <span>Email:</span>
            <input type="text" id="email" name="email" value="{{ old('email') }}">
        </label>
        <div class="form-controls">
            <button type="submit" class="form-btn">Create Employee</Button>
        </div>
        @if ($errors->any())
            <ul class="msg">
                @foreach ($errors->all() as $error )
                <li class="msg-error">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-layout>