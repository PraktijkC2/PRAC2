@extends('layout')

@section('content')
    <div class="">
        {{ $boeken->titel }}
        {{ $boeken->omschrijving }}
    </div>
@endsection