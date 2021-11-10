@extends('layout')

@section('content')

    <div class="wrapper">
        <div class="actor-container">
            <div class="actor">
                <img src="{{ $actors->image }}" alt="Actors image">
                <p>{{ $actors->voornaam }} {{ $actors->achternaam }}</p>
            </div>
            <div class="actor-info">
                <p>{{ $actors->info }}</p>
                <a href="{{ $actors->url }}">Meer info</a>
            </div>
        </div>
    </div>
@endsection