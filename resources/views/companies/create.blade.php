<x-layout>
    <h2>Create Company</h2>
    <div class="form-container">
        <form class="form" action="/companies/create" method="post" enctype="multipart/form-data">
            @csrf
            <label for="company_name">
                <span>Name</span>
                <input type="text" id="company_name" name="company_name">
            </label>
            <label for="company_logo">
                <span>Logo</span>
                <input type="file" name="company_logo" id="company_logo">
            </label>
            <label for="company_email">
                <span>E-Mail</span>
                <input type="text" id="company_email" name="company_email">
            </label>
            <label for="company_website">
                <span>Website</span>
                <input type="text" id="company_website" name="company_website">
            </label>
            <div class="form-controls">
                <button type="submit" id="company-create-btn" name="company-create-btn">Create Company</button>
            </div>
        </form>
    </div>
</x-layout>