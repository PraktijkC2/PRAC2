@extends('layout')

<?php
setlocale(LC_ALL, 'NL_nl');
date_default_timezone_set('Europe/Amsterdam'); 
?>

@section('content')
    <div class="datetime-container">
        <h1>{{ strftime('%A') }}</h1>
        <h1>{{ strftime('%d %B') }}</h1>
        <h2><span>{{ strftime('%H') }}</span>:<span>{{ strftime('%M') }}</span></h2>
    </div>
@endsection