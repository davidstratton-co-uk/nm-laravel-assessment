<x-layout>
    <section>
        <div class="company-card-big">
            <h3>Editing - {{ company['name'] }}</h3>
            <div class="company-details">
                <div>
                    <div>Company Name:</div>
                    <div>{{ company['name'] }}</div>
                </div>
                <div>
                    <div>E-Mail:</div>
                    <div>{{ company['email'] }}</div>
                </div>
                <div>
                    <div>Website:</div>
                    <div>{{ company['website'] }}</div>
                </div>
            </div>
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
            <div class="employee-controls">
                <button class="employee-add-btn">Add Existing Employee</button>
                <button class="employee-add-btn">Add New Employee</button>
            </div>
    <   </div>
        <div class="company-controls">
            <button class="company-edit-btn">Confirm</button>
            <button class="company-del-btn">Delete</button>
        </div>
    </section>
</x-layout>