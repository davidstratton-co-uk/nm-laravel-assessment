<x-layout>
    <section>
        <form action="/companies/create" method="post">
            @csrf
            @method("STORE")
            <div class="company-card-big">
                <h3>Creating New Company</h3>
                <div class="company-details">
                    <label for="company_name">
                        <div>Company Name: </div>
                        <input type="text" id="company_name" name="company_name">
                    </label>
                    <label for="company_email">
                        <div>E-Mail:</div>
                        <input type="text" id="company_email" name="company_email">
                    </label>
                    <label for="company_website">
                        <div>Website:</div>
                        <input type="text" id="company_website" name="company_website">
                    </label>
                </div>
            </div>
            <div class="form-create-controls">
                <button type="submit" id="company-create-btn" name="company-create-btn">Create Company</button>
            </div>
        </form>
    </section>
</x-layout>