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
                        <a href="/">Receitas</a>

                    </li>
                    <li>
                        <a href="/">Criar Receitas</a>
                    </li>
                    <li>
                        <a href="/">Entrar</a>
                    </li>
                    <li>
                        <a href="/">Cadastrar</a>
                    </li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>HDC Events &copy; 2023
            </p>
            </footer>
    </body>
</html>