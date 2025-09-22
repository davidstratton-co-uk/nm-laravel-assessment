<x-layout>
    <section>
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
        <div class="company-controls">
            <a href="/company/{{ $company->id }}/edit">Edit</button>
        </div>
    </section>
</x-layout>