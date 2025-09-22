<x-layout>
    <section>
        <form action="/companies{{ $company->id }}/edit" method="post">
            @csrf
            <div class="company-card-big">
                <h3>Viewing - {{ $company->name }}</h3>
                <div class="company-details">
                    <div>
                        <div>E-Mail:</div>
                        <div>{{ $company->email }}</div>
                    </div>
                    <div>
                        <div>Website:</div>
                        <div>{{ $company->website }}</div>
                    </div>
                </div>
                <div class="company-employee-list">
                    <ul>
                        @foreach($company->employees as $employee)
                        <li>
                            <div class="employee-name">{{ $employee->first_name }} {{ $employee->last_name }}</div>
                            <div class="employee-phone">{{ $employee->phone }}</div>
                            <div class="employee-email">{{ $employee->email }}</div>
                            <div class="employee-edit">
                                <button class="employee-edit-btn" type=button>
                                    Edit
                                </button>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="form-edit-controls">
                <button type="submit" id="company-edit-btn" name="company-edit-btn">Submit Edit</button>
            </div>
        </form>
        <form action="/companies/{{ $company->id }}/del" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" id="company-del-btn" name="company-del-btn">Delete</button>
        </form>
    </section>
</x-layout>