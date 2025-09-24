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
        <nav id="site-nav">
            <header id="site-header">
                <a href="/">
                    <h1>Laravel Assessment</h1>
                </a>
            </header>
            <ul class="nav-tabs">
                <li><a href="/companies">Companies</a></li>
                <li><a href="/employees">Employees</a></li>
            </ul>
            <ul>
                <li><a href="/companies/create">Add Company</a></li>
                <li><a href="/employees/create">Add Employee</a></li>    
                <li class="logout-btn">
                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Logout</button>
                    </form>
                </li>
            </ul> 
        </nav>
        @endif
        <main>
            {{ $slot }}
        </main>
        <footer>
            Designed by <a href="https://davidstratton.co.uk">David Stratton</a>
        </footer>
    </div>
</body>
</html>