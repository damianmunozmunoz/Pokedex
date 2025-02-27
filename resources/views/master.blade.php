<html>
    <head>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1>@yield('header')</h1>
        </header>
        <section class="text-light bg-dark">
        <nav>
         @yield('nav')
        </nav>
        <main>
            <h1 class="centrado">
                @yield('main_title')
            </h1><br>
            @section('content')
            
            @show
        </main>
        </section>
        <footer>
            @yield('footer')
        </footer>
    </body>
</html>