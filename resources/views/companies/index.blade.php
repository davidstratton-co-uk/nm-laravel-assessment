<x-layout>
    <h2>Companies</h2>
    <table class="card-list">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Employees</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Website</th>
                <th scope="col">Last Updated</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($companies as $company)
            <tr>
                <td class="card-img--small"><img src="{{ Vite::asset("resources/images/companies/logos/$company->logo") }}" alt=" "></td>
                <td><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></td>
                <td>{{  $company->employees_count }}</td>
                <td><a href="mailto://{{ $company->email }}"">{{ $company->email }}</a></td>
                <td><a href="https://{{ $company->website }}">{{ $company->website }}</a></td>
                <td>{{ $company->updated_at }}</td>
                <td><a class="edit-btn" href="/companies/{{ $company->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><button class="delete-btn" form="form-delete" formaction="/companies/{{  $company->id }}/del" type="submit"><i class="fa-solid fa-trash"></i></button></td>            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {{ $companies->links('components.pagination') }}
    </div>
    <form id="form-delete" action="/compaies/" method="POST">
        @csrf
        @method('DELETE')
    </form>
</x-layout>