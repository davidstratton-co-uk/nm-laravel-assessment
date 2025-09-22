<x-layout>
    <section>
        <div class="employee-card-big">
            <h3>Viewing - {{ employee['name'] }}</h3>
            <ul>
                <li>
                    <div class="employee-name">{{ employee['name'] }}</div>
                    <div class="employee-company">{{ employee['company_id'] }}</div>
                    <div class="employee-phone">{{ emplyuee['phone'] }}</div>
                    <div class="employee-email">{{ emplyuee['email'] }}</div>
                    <div class="employee-edit">
                        <button class="employee-edit-btn" type=button>

                        </button>
                    </div>
                </li>
            </ul>
    <   </div>
        <div class="company-controls">
            <button class="company-edit-btn">Edit</button>
        </div>
    </section>
</x-layout>