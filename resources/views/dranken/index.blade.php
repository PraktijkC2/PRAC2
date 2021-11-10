@extends('layout')

@section('content')
    <div class="">
        <h1>hallo</h1>
        @foreach($dranken as $drank)
            {{ $drank->name }}
        @endforeach
    </div>
@endsection