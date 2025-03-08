<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TradeFlow')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('clients.index') }}">Clients</a></li>
            <li><a href="{{ route('employees.index') }}">Employees</a></li>
            <li><a href="{{ route('stocks.index') }}">Stocks</a></li>
            <li><a href="{{ route('finance') }}">Finance</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
