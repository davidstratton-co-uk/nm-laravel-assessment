<x-layout>
    <h2>Companies</h2>
    @session('success')
        <div class="msg-box">
            <ul class="msg">
                <li class="msg-success">{{ $value }}</li>
            </ul>
        </div>
    @endsession
    <div class="table-box">
        <table class="card-list">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"><x-sortable-link column="name">Name</x-sortable-link></th>
                    <th scope="col"><x-sortable-link column="employees_count">Employees</x-sortable-link></th>
                    <th scope="col"><x-sortable-link column="email">E-Mail</x-sortable-link></th>
                    <th scope="col"><x-sortable-link column="website">Website</x-sortable-link></th>
                    <th scope="col"><x-sortable-link column="updated_at">Last Updated</x-sortable-link></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td class="card-img--small">
                        <img src="
                            @if ($company->logo)
                                {{ asset('uploads/images/' . $company->logo) }}
                            @else 
                                {{ asset('uploads/images/default/logo-5.webp') }}
                            @endif
                        "
                        alt="Logo of {{ $company->name }}">
                    </td>
                    <td><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></td>
                    <td>{{  $company->employees_count }}</td>
                    <td><a href="mailto://{{ $company->email }}"">{{ $company->email }}</a></td>
                    <td><a href="{{ $company->website }}">{{ $company->website }}</a></td>
                    <td>{{ $company->updated_at }}</td>
                    <td><a class="edit-btn" href="/companies/{{ $company->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><button class="delete-btn" form="form-delete" formaction="/companies/{{  $company->id }}" type="submit"><i class="fa-solid fa-trash"></i></button></td>            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {{ $companies->links('components.pagination') }}
    </div>
    <form id="form-delete" action="/compaies/" method="POST">
        @csrf
        @method('DELETE')
    </form>
</x-layout>