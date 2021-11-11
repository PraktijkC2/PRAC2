@extends('layout')

@section('content')
<div class="container stakeholders">
      
    <div class="box cyan">
        <h2>Gereedschap</h2>
        @foreach($gereedschap as $grdschap)
            @if(strpos($grdschap, 'none') !== false)
                <a href="{{ route('gereedschap.index', $grdschap->id) }}">{{ $grdschap->name }}</a>
            @endif
        @endforeach
        <br>
        <h4>Zagen</h4>
        @foreach($gereedschap as $grdschap)
            @if(strpos($grdschap, 'zagen') !== false)
                <a href="{{ route('gereedschap.index', $grdschap->id) }}">{{ $grdschap->name }}</a>
            @endif
        @endforeach 
    </div>

    <div class="box red">
        <h2>Dranken</h2>

        @foreach($dranken->take(1) as $drank)
            @if(strpos($drank, 'frisdranken') !== false)
                <a href="{{ route('dranken.index', $drank->categorie) }}">{{ $drank->categorie }}</a>
            @endif
        @endforeach

        @foreach($dranken->take(2) as $drank)
            @if(strpos($drank, 'warmedranken') !== false)
                <a href="{{ route('dranken.index', $drank->categorie) }}">{{ $drank->categorie }}</a>
            @endif
        @endforeach
    </div>
</div>
@endsection