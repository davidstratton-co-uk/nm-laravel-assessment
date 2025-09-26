<x-layout>
        <div id="login">
            <form id="form-login" action="/login" method="POST">
                @csrf
                    <img src="{{ asset('uploads/images/default/avatar.webp') }}" alt=" ">
                <h2>Login</h2>
                <label for="email">
                    <span>Email</span>
                    <input type="text" id="email" name="email" value="{{ old('email') }}">
                </label>
                <label for="password">
                    <span>Password</span>
                    <input type="password" id="password" name="password">
                </label>

                <button class="form-login-btn" type="submit" id="submit" name="submit">Login</button>
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