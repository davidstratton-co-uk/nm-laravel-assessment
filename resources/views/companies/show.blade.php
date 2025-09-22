<x-layout>
    <section>
        <div class="company-card-big">
            <h3>Viewing - {{ company['name'] }}</h3>
            <div class="company-details">
                <div>
                    <div>E-Mail:</div>
                    <div>{{ company['email'] }}</div>
                </div>
                <div>
                    <div>Website:</div>
                    <div>{{ company['website'] }}</div>
                </div>
            </div>
            <div class="company-employee-list">
                <ul>
                    <li>
                        <div class="employee-name">{{ employee['name'] }}</div>
                        <div class="employee-phone">{{ emplyuee['phone'] }}</div>
                        <div class="employee-email">{{ emplyuee['email'] }}</div>
                        <div class="employee-edit">
                            <button class="employee-edit-btn" type=button>

                            </button>
                        </div>
                    </li>
                </ul>
            </div>
    <   </div>
        <div class="company-controls">
            <button class="company-edit-btn">Edit</button>
        </div>
    </section>
</x-layout>