@extends('layout')

<?php
setlocale(LC_ALL, 'NL_nl');
date_default_timezone_set('Europe/Amsterdam'); 
?>

@section('nav')
    <nav>
        <div class="logo">
                <h1>code<<camp><i class="fas fa-campground"></i>></h1>
        </div>
        <div class="links-nav">
            <a href="" class="active"><i class="fas fa-home"></i> Homepagina</a>
            <a href=""><i class="fas fa-book-reader"></i> My Library</a>
            <a href=""><i class="far fa-question-circle"></i> Informatie</a>
            <a href=""><i class="fas fa-hands-helping"></i> Stakeholders</a>
        </div>
    </nav>
@endsection

@section('content')
    <div class="datetime-container">
        <h1>{{ strftime('%A') }}</h1>
        <h1>{{ strftime('%d %B') }}</h1>
        <h2><span>{{ strftime('%H') }}</span>:<span>{{ strftime('%M') }}</span></h2>
    </div>
@endsection

@section('footer')
    <h1>CodeCamp &copy; 2021</h1>
    <h1>Koestraat 1, 's-Hertogenbosch</h1>
    <div class="footer-contact-links">
        <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjgmIX29tjzAhWLCOwKHa0ZCmgQFnoECAsQAQ&url=https%3A%2F%2Fwww.google.com%2Fgmail%2F&usg=AOvVaw3mZ_qbD_gQyp_sqkjrwStn"><i class="fas fa-envelope-square"></i> Email</a>
        <a href="https://twitter.com/"><i class="fab fa-twitter-square"></i> Twitter</a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></i> Instagram</a>
        <a href=""><i class="fas fa-phone-square-alt"></i> 073 48 12 28</a>
    </div>
@endsection