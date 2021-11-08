@extends('layout')

@section('content')
    <div class="">
        {{ $films->titel }}
        {{ $films->director }}
        {{ $films->samenvatting }}
    </div>
@endsection