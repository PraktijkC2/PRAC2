@extends('layout')

@section('content')
    <div class="container-books">
        <div class="books">
            <h4>{{ $boeken->titel }}</h4>
            <img src="{{ $boeken->image }}" alt="" width="250px">
        </div>
        <div class="books-info">
            <h3>{{ $boeken->auteur }}</h3>
            <div class="books-p">
                <p>{{ $boeken->omschrijving }}</p>
            </div>
            <h5> {{ $boeken->pages }} </h5>
            <button>Boek kopen!</button>
        </div>
    </div>
@endsection