<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NM Laravel Assessment | David Stratton</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div>
        <nav>
            <div>
                <a href="/">
                    Laravel Assessment
                </a>
            </div>
            <ul>
                <li><a href="/companies">Companies</a></li>
                <li><a href="/employees">Employees</a></li>
            </ul>
            <ul>
                <li>
                    <form action="/logout" method="POST">
                        <a href="#">Logout</a>
                    </form>
                </li>
            </ul>
        </nav>

        <main>
            {{ $slot }}
        </main>
    <div>
</body>
</html>