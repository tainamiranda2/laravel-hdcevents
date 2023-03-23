<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="/css/style.css" />
     
<html>
    <body>
        <header>
            <nav class="navbar">
                <ul>
                    <li>
                        <a href="/">Eventos</a>

                    </li>
                    <li>
                        <a href="/events/create">Criar Eventos</a>
                    </li>
                    @auth
                    <li>
                        <a href="/dashboard">Meus Eventos</a>
                    </li>
                    <li>
                        @csrf
                        <form action="/logout" method="POST">
                        <a href="/logout" onclick="event.preventDefault();
                        this.closest('form').submit()"; >
                        Sair
                    </a>
                        </form>

                    </li>
                    @endauth
                   @guest 
                    <li>
                        <a href="/login">Entrar</a>
                    </li>
                    <li>
                        <a href="/register">Cadastrar-se</a>
                    </li>
                    @endguest
                </ul>
            </nav>
        </header>
        <main>
            @if(session('msg'))
            <p>{{session('msg')}}</p>
            @endif
            @yield('content')
        </main>
      
        <footer>
            <p>HDC Events &copy; 2023
            </p>
            </footer>
    </body>
</html>