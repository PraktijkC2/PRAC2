@extends('layout')

@section('content')
    <body style="background-color:{{ $songs->achtergrond }};">
        <div class="wrapper">
            <div class="song-info">
                <h3 class="song-title">{{ $songs->songname }}</h3>
                <p class="artist">{{ $songs->artiest }}</p>
                <div style="color: {{ $songs->tekstkleur }}" class="songtekst">
                    <p style="line-height:25px;">{{ $songs->songtekst }}</p>
                </div>
                <div class="songs-actions">
                    <a href="{{ $songs->url }}">Meer Info</a>
                    <Button class="like" onclick ="Toggle1()" id="btnh1" class="btn-like"><i class="fas fa-heart"></i></Button>
                </div>
            </div>
        </div>
    </body>

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