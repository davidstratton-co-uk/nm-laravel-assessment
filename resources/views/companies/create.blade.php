<x-layout>
    <h2>Create Company</h2>
    <div class="form-container">
        <form class="form" action="/companies/create" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name">
                <span>Name</span>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
            </label>
            <label for="logo">
                <span>Logo</span>
                <input type="file" name="logo" id="logo" value="{{ old('logo') }}">
            </label>
            <label for="email">
                <span>E-Mail</span>
                <input type="text" id="email" name="email" value="{{ old('email') }}">
            </label>
            <label for="website">
                <span>Website</span>
                <input type="text" id="website" name="website" value="{{ old('website') }}">
            </label>
            <div class="form-controls">
                <button type="submit" id="create-btn">Create Company</button>
            </div>
            @if ($errors->any())
            <ul class="msg">
                @foreach ($errors->all() as $error )
                <li class="msg-error">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </form>
    </div>
</x-layout>