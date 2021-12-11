<!doctype html>
<html lang='en'>

<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>

<body>

    <div class='page-margin'>

        <div class='container'>

            <div class='row'>

                <div class='col'></div>

                <div class='col'>
                    <header>
                        <h1>
                            <img id='app-logo' src='/images/rps_game_logo.png'
                                alt='{{ $app->config('app.name') }} Game'>
                        </h1>
                    </header>
                </div>
                <div class='col'></div>
            </div>
        </div>

        <main>
            @yield('content')
        </main>

        @yield('body')

        <nav class="navbar fixed-bottom navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Rock, Paper, Scissors Game</a>
            @yield('nav-bar')
        </nav>


    </div>


</body>

</html>
