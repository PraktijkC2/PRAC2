@extends('layout')

@section('content')
    <div class="">
        {{ $actors->voornaam }} {{ $actors->achternaam }}
        {{ $actors->info }}
    </div>
@endsection