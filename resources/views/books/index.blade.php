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
            <h5> {{ $boeken->pages }}  blz.</h5>
            <h5 style="margin:0;"> {{ $boeken->price }} EURO</h5>
            <button>Boek kopen!</button>
            <div class="books-info">
                <Button onclick ="Toggle1()" id="btnh1" class="btn-like"><i class="fas fa-heart"></i></Button>
            </div>
        </div>
        
    </div>
    
            <script>

                var btnvar1 = document.getElementById('btnh1');

                function Toggle1(){
                         if(btnvar1.style.color =="red"){
                             btnvar1.style.color = "grey"
                         }
                         else{
                             btnvar1.style.color ="red"
                         }
                }

            </script>
@endsection