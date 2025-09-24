<x-layout>
    <section>
        <h2>Companies</h2>
        <div class="card-list">
            @foreach ($companies as $company)
            <div class="card-small">
                <a href="/companies/{{ $company->id }}"></a>
                <div class="card-img">
                    <img src="{{ Vite::asset("resources/images/companies/logos/$company->logo") }}" height="100px" alt="">
                </div>
                <dl>
                    <dt>Name</dt>
                    <dd><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></dd>
                    <dt>E-Mail</dt>
                    <dd><a href="mailto://{{ $company->email }}"">{{ $company->email }}</a></dd>
                    <dt>Website</dt>
                    <dd><a href="https://{{ $company->website }}">{{ $company->website }}</a></dd>
                </dl>
            </div>
            @endforeach
        </div>
        <div>
            {{ $companies->links('components.pagination') }}
        </div>
    </section>
</x-layout>