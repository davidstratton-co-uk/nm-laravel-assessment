<x-layout>
    <section>
        <h2>Companies</h2>
        <table class="card-list">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Website</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td class="card-img--small"><img src="{{ Vite::asset("resources/images/companies/logos/$company->logo") }}" alt=" "></td>
                    <td><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></td>
                    <td><a href="mailto://{{ $company->email }}"">{{ $company->email }}</a></td>
                    <td><a href="https://{{ $company->website }}">{{ $company->website }}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            {{ $companies->links('components.pagination') }}
        </div>
    </section>
</x-layout>