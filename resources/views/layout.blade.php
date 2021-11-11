<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CodeCamp</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://kit.fontawesome.com/af48d48999.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@400;500&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="wrapper">
            <header>
                <nav>
                    <div class="logo">
                    <a href="/"><h1>code<<camp><i class="fas fa-campground"></i></h1></a>
                    </div>
                    <div class="links-nav">
                    @if(Route::has('login'))
                            @auth
                            <a style="margin-right: 5px;" href="/" class="active"><i class="fas fa-home"></i> Homepagina</a>
                            <a style="margin-right: 5px;" href="/library"><i class="fas fa-book-reader"></i> My Library</a>
                            <a style="margin-right: 5px;" href="/informatie"><i class="far fa-question-circle"></i> Informatie</a>
                            <a style="margin-right: 10px;" href="/stakeholders"><i class="fas fa-coffee"></i> Producten</a>
                            <form method="POST" action="{{ route('logout') }}">@csrf
                                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                            </form>
                            @else
                                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                            @endif
                            @endauth
                        @endif
                    </div>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
            <h1>CodeCamp &copy; 2021</h1>
            <h1>Koestraat 1, 's-Hertogenbosch</h1>
                <div class="footer-contact-links">
                    <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiAjfDD_tjzAhVPsaQKHVKFCmEQFnoECAoQAQ&url=https%3A%2F%2Fwww.google.com%2Fgmail%2F&usg=AOvVaw3mZ_qbD_gQyp_sqkjrwStn"><i class="fas fa-envelope-square"></i> Email</a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter-square"></i> Twitter</a>
                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></i> Instagram</a>
                    <a href=""><i class="fas fa-phone-square-alt"></i> 073 48 12 28</a>
                </div>
            </footer>
        </div>
    </body>
</html>
