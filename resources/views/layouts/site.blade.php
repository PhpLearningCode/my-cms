<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <title>William Souza - Desenvolvedor Fullstack</title>
</head>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="{{ route('contact') }}">Contato</a></li>

            </ul>
        </nav>
    </header>
    <body>
        @yield('content')
    </body>
    <footer>
        <p>&nbsp;</p>
    </footer>
</html>
