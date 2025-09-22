<x-layout>
    <section>
        <h3>Employees</h3>
        <div>
            @foreach ( $employees as $employee)
                <x-employee-card :$employee></x-employee-card> 
            @endforeach
        </div>
    </section>
</x-layout>