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
        
        <h4>Frisdranken</h4>
        @foreach($dranken as $drank)
            @if(strpos($drank, 'frisdranken') !== false)
                <a href="{{ route('dranken.index', $drank->categorie) }}">{{ $drank->name }}</a>
            @endif
        @endforeach 

        <h4>Warmedranken</h4>
        @foreach($dranken as $drank)
            @if(strpos($drank, 'warmedranken') !== false)
                <a href="{{ route('dranken.index', $drank->categorie) }}">{{ $drank->name }}</a>
            @endif
        @endforeach 
    </div>
</div>
@endsection