<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NM Laravel Assessment | David Stratton</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div id="site-container">
        @if (!request()->routeIs('login'))
        <nav>
            <div>
                <a href="/">
                    Laravel Assessment
                </a>
            </div>
            @auth
            <ul>
                <li><a href="/companies">Companies</a></li>
                <li><a href="/employees">Employees</a></li>
            </ul>
            <ul>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Logout</button>
                    </form>
                </li>
            </ul> 
            @endauth
        </nav>
        @endif
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>