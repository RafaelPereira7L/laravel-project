<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    @vite('resources/css/app.css')
</head>
<body>
    @section('sidebar')
        <div>
            <nav>Sidebar</nav>
        </div>
    @show

    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
