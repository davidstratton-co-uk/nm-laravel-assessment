@props(['company_id'])

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
            <header id="nav-header">
                <img src="{{ asset('uploads/images/default/avatar.webp') }}" alt=" ">
                <a href="/">
                    <h1>Laravel Assessment</h1>
                </a>
            </header>
            <div class="nav-button">
                <form id="form-logout" action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="logout-btn" form="form-logout" type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Logout</span></button>
                </form>
            </div> 
            <ul class="nav-lists">
                <li class="{{ request()->is('/') ? 'active' : '' }}"><a class="icon-swap" href="/"><i class="fa-solid fa-house"></i><span>Dashboard</span></a></li>
                <li class="{{ request()->routeis('companies') ? 'active' : '' }}"><a href="/companies">Companies</a></li>
                <li class="{{ request()->routeis('employees') ? 'active' : '' }}"><a href="/employees">Employees</a></li>
            </ul>
            <ul class="nav-create">
                <li class="{{ request()->is('companies/create') ? 'active' : ''  }}"><a class="icon-swap" href="/companies/create"><i class="fa-solid fa-square-plus"></i>Company</a></li>
                <li class="{{ request()->is('employees/create') ? 'active' : ''  }}"><a class="icon-swap" href="/employees/create{{ isset($company_id) ? "/?company_id=" . $company_id : ' ' }}"><i class="fa-solid fa-square-plus"></i>Employee</a></li>    
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