@extends('layout')

@section('content')
<div class="wrapper">
        <div class="actor-container">
            <div class="actor">
                <img src="{{ $films->image }}" alt="film image">
                <p>{{ $films->titel }} - Roger Moore</p>
            </div>
            <div class="actor-info">
                <p>{{ $films->samenvatting }}</p>
                <ul style="list-style-type: none; margin-bottom:10px">
                    <li>1. "Live and Let Die" – 1973</li>
                    <li>2. "The Man with the Golden Gun" – 1974</li>
                    <li>3. "The Spy Who Loved Me" – 1977</li>
                    <li>4. "Moonraker" – 1979</li>
                    <li>5. "For Your Eyes Only" – 1981</li>
                    <li>6. "Octopussy" – 1983</li>
                    <li>7. "A View to a Kill" – 1985</li>
                </ul>
                <div class="actor-actions">
                    <a target="_blank" href="https://www.liveabout.com/james-bond-movies-starring-roger-moore-728275">Meer info</a>
                    <Button class="like" onclick ="Toggle1()" id="btnh1" class="btn-like"><i class="fas fa-heart"></i></Button>
                </div>
            </div>
        </div>
    </div>
@endsection