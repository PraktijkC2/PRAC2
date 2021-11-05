@extends('layout')

@section('content')
    <div class="">
        {{ $songs->songname }}
        {{ $songs->artiest }}
        {{ $songs->songtekst }}
    </div>
@endsection