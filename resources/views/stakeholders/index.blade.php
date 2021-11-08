@extends('layout')

@section('content')
<div class="container stakeholders">
      
    <div class="box cyan">
        <h2>Gereedschap</h2>
        @foreach($gereedschap as $grdschap)
            <a href="{{ route('gereedschap.index', $grdschap->id) }}">{{ $grdschap->name }}</a>
        @endforeach 
    </div>

    <div class="box red">
        <h2>Dranken</h2>
        @foreach($dranken as $drank)
            <a href="{{ route('dranken.index', $drank->id) }}">{{ $drank->name }}</a>
        @endforeach 
    </div>
</div>
@endsection