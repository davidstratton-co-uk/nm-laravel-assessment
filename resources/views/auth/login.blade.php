<x-layout>
        <div id="login">
            <form id="form-login" action="/login" method="POST">
                @csrf
                <x-site-logo />
                <h2>Login</h2>
                <label for="email">
                    <span>E-Mail</span>
                    <input type="text" id="email" name="email">
                </label>
                <label for="password">
                    <span>Password</span>
                    <input type="password" id="password" name="password">
                </label>

                <button class="form-login-btn" type="submit" id="submit" name="submit">Login</button>

            </form>
        </div>
</x-layout>