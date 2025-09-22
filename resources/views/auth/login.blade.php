<x-layout>
    <form class="form-login" id="form-id" action="/login" method="POST">
        @csrf

        <input class="form-login-input" type="text" id="email" name="email">
        <input class="form-login-input" type="password" id="password" name="password">
        <button class="form-login-btn" type="submit" id="submit" name="submit">Login</button>
    </form>
</x-layout>