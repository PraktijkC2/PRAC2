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
            <a href="{{ $songs->url }}">Meer Info</a>
        </div>
    </div>
</body>
@endsection