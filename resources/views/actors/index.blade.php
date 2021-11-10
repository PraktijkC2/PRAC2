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
                <div class="actor-actions">
                    <a href="{{ $actors->url }}">Meer info</a>
                    <Button class="like" onclick ="Toggle1()" id="btnh1" class="btn-like"><i class="fas fa-heart"></i></Button>
                </div>
            </div>
        </div>
    </div>

    <script>

        var btnvar1 = document.getElementById('btnh1');

        function Toggle1(){
            if(btnvar1.style.color =="red"){
             btnvar1.style.color = "grey"
            }
            else{
             btnvar1.style.color ="red"
            }
        }
    </script>
@endsection