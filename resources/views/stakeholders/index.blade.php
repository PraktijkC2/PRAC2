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
        
        <h4>Zagen</h4>
        @foreach($gereedschap as $grdschap)
            @if(strpos($grdschap, 'zagen') !== false)
                <a href="{{ route('gereedschap.index', $grdschap->id) }}">{{ $grdschap->name }}</a>
            @endif
        @endforeach 
    </div>

    <div class="box red">
        <h2>Dranken</h2>

        @foreach($dranken as $drank)
            @if(strpos($drank, 'frisdranken') !== false)
                <a href="{{ route('dranken.index', $drank->id) }}">{{ $drank->name }}</a>
            @endif
        @endforeach

        @foreach($dranken as $drank)
            @if(strpos($drank, 'warmedranken') !== false)
                <a href="{{ route('dranken.index', $drank->id) }}">{{ $drank->name }}</a>
            @endif
        @endforeach
    </div>
</div>
@endsection