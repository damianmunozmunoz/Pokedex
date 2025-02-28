<html>
    <head>
    <link rel="stylesheet" href="{{ asset('css/estilos2.css') }}">
    <link href="https://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1 class="display-1">@yield('header')</h1>
        </header>
        <div class="bola">
        </div>
        <section class="bg-secondary">
        <!-- <nav>
         @yield('nav')
        </nav> -->
        <main>
            <h1 class="text-light">
                @yield('main_title')
            </h1><br>
            @section('content')
            
            @show
        </main>
<<<<<<< HEAD
=======
        <!-- <aside>
            @yield('aside')
        </aside> -->
>>>>>>> c2d1a7164ea702d8932c367328e3c379cfd089a2
        </section>
        <footer>
            @yield('footer')
        </footer>
    </body>
</html>