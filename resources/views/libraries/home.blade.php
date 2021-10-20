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
        <div class="container-themas">
            <div class="songs">
                <h1>Songs</h1>
                <img src="" alt="">
                <a href="">Bohemian Rapshody</a>
                <a href="">Madness</a>
                <a href="">Uprising</a>
                <a href="">Plug in baby</a>
                <a href="">Transylvia</a>
                <a href="">We are the champions</a>
            </div>
            <div class="films">
                <h1>Films</h1>
                <img src="" alt="">
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
            </div>
            <div class="film-personages">
                <h1>Actors</h1>
                <img src="" alt="">
                <a href=""></a>
            </div>
            <div class="books">
                <h1>Books</h1>
                <img src="" alt="">
                <a href=""></a>
            </div>
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