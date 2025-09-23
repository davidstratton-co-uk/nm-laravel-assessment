<x-layout>
    <section>
        <h3>Companies</h3>
        <div>
            @foreach ($companies as $company)
            <div class="company-card">
                <a class="company-link" href="/companies/{{ $company->id }}"></a>
                <div class="company-img">
                    <img src="{{ Vite::asset("resources/images/companies/logos/$company->logo") }}" height="100px" alt="">
                </div>
                <div class="company-details">
                    <div class="company-name"><a class="company-link" href="/companies/{{ $company->id }}">{{ $company->name }}</a></div>
                    <div class="company-email">{{ $company->email }}</div>
                    <div class="company-website"><a href="{{ $company->website }}">{{ $company->website }}</a></div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>