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
    <div class="footer-contact-links">
        <a href=""><i class="fas fa-envelope-square"></i> Email</a>
        <a href=""><i class="fab fa-twitter-square"></i> Twitter</a>
        <a href=""><i class="fas fa-hashtag"></i> Instagram</a>
        <a href=""><i class="fas fa-phone-square-alt"></i> 076 4812 28</a>
    </div>
@endsection