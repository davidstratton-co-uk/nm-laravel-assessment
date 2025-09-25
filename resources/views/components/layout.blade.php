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
                <li class="{{ request()->is('companies') ? 'active' : '' }}"><a href="/companies">Companies</a></li>
                <li class="{{ request()->is('employees') ? 'active' : '' }}"><a href="/employees">Employees</a></li>
            </ul>
            <ul class="nav-tabs">
                <li class="{{ request()->is('companies/create') ? 'active' : ''  }}"><a href="/companies/create">Add Company</a></li>
                <li class="{{ request()->is('employees/create') ? 'active' : ''  }}"><a href="/employees/create">Add Employee</a></li>    
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
        @if (!request()->routeIs('login'))
        <footer>
            Designed by <a href="https://davidstratton.co.uk">David Stratton</a>
        </footer>
        @endif
    </div>
</body>
</html>