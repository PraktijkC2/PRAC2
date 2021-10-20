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
                            <h1>code<<camp><i class="fas fa-campground"></i>></h1>
                    </div>
                    <div class="links-nav">
                        <a href="/" class="active"><i class="fas fa-home"></i> Homepagina</a>
                        <a href="/library"><i class="fas fa-book-reader"></i> My Library</a>
                        <a href="/informatie"><i class="far fa-question-circle"></i> Informatie</a>
                        <a href="/stakeholders"><i class="fas fa-hands-helping"></i> Stakeholders</a>
                    </div>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
            <h1>CodeCamp &copy; 2021</h1>
                <div class="footer-contact-links">
                    <a href=""><i class="fas fa-envelope-square"></i> Email</a>
                    <a href=""><i class="fab fa-twitter-square"></i> Twitter</a>
                    <a href=""><i class="fas fa-hashtag"></i> Instagram</a>
                    <a href=""><i class="fas fa-phone-square-alt"></i> 076 4812 28</a>
                </div>
            </footer>
        </div>
    </body>
</html>
