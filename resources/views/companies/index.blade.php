<x-layout>
    <section>
        <h3>Companies</h3>
        <div>
            @foreach ($companies as $company)
            <x-company-card :$company ></x-company-card>
            @endforeach
        </div>
    </section>
</x-layout>