@extends('layout')

@section('content')
<div class="container library">
    <div class="box cyan">
        <h2>Songs</h2>
        @foreach($songs as $song)
            <a href="{{ route('songs.index', $song->id) }}">{{ $song->name }}</a>
        @endforeach 
    </div>

    <div class="box red">
    <h2>Films</h2>
        @foreach($films as $film)
            <a href="{{ route('films.index', $film->id) }}">{{ $film->name }}</a>
        @endforeach 
    </div>

    <div class="box blue">
        <h2>Actors</h2>
        @foreach($actors as $actor)
            <a href="{{ route('actors.index', $actor->id) }}">{{ $actor->name }}</a>
        @endforeach 
    </div>
    
	<div class="box purple">
        <h2>Books</h2>
        @foreach($books as $book)
            <a href="{{ route('books.index', $book->id) }}">{{ $book->name }}</a>
        @endforeach 
    </div>

</div>
@endsection