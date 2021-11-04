@extends('layout')

@section('content')
    <div class="">
        {{ $gereedschap->name }}
        {{ $gereedschap->description }}
    </div>
@endsection