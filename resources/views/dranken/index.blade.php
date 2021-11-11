@extends('layout')

@section('content')
    <div class="wrapper">
        <div class="dranken-content">
            <div class="cola-content">
                @foreach($dranken as $drank)
                    @if(strpos($drank, 'Cola') !== false)
                        <div class="frisdrankenbox">
                            <h1>{{ $drank->name }}</h1>
                            <p>Tijdens de Olympische Spelen van 1928 was Coca-Cola voor het eerst in Nederland verkrijgbaar. Het eerste verkooppunt was een kraampje op het terrein van het Olympisch Stadion in Amsterdam. In 1930 werd te Amsterdam de 'N.V. Nederlandse Coca-Cola Maatschappij' opgericht, waarmee deze merklimonade haar intrede deed op de Nederlandse markt. In eerste instantie was er een ander frisdrankmerk in Nederland, Noca Nola. Pas nadat Noca Nola was overgenomen door Coca-Cola (in 1937), was de gehele Nederlandse markt beschikbaar.</p>
                            <a href="http://127.0.0.1:8000/films/1"> Roger Moore -> </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="sinas-content">
                @foreach($dranken as $drank)
                    @if(strpos($drank, 'Sinas') !== false)
                        <div class="frisdrankenbox">
                            <h1>{{ $drank->name }}</h1>
                            <p>Fanta is een koolzuurhoudende frisdrank van The Coca-Cola Company. Fanta is vooral bekend als een sinaasappeldrank met koolzuur (Fanta Orange), maar er bestaan tal van andere smaken, al dan niet met koolzuur. Te noemen zijn onder andere: Mandarin, Fruit Twist, Lemon, Skwizz, Shokata, Apple, Strawberry en Pink Kiss. Veel van deze smaken zijn ook in light-versie beschikbaar. In Nederland kent Fanta de volgende smaken: Orange, Pomelo, Red Fruit, Cassis, Exotic, Lemon en Mezzo. </p>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="7up-content">
                @foreach($dranken as $drank)
                    @if(strpos($drank, '7up') !== false)
                        <div class="frisdrankenbox">
                            <h1>{{ $drank->name }}</h1>
                            <p>7up of Sevenup is een bruisende drank (prik door koolzuur) die van smaak lijkt op Sprite. 7up wordt verkocht in een groene, plastic fles. Het heeft een lemon-lime (citroen-limoen) smaak en is doorzichtig. 7up is in het jaar 1929 bedacht door de Amerikaan Charles Leiper Grigg. De echte naam van het drankje was eigenlijk, Bib-Label Lithiated Lemon-Lime Soda. Deze lange naam werd al snel veranderd in 7up. In de reclame werd de stripfiguur Fido Dido gebruikt. Deze frisdrank kun je kopen in meer dan 130 landen. </p>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="koffie-content">
                @foreach($dranken as $drank)
                    @if(strpos($drank, 'Koffie') !== false)
                        <div class="warmedrankenbox">
                            <h1>{{ $drank->name }}</h1>
                            <p>Koffie is een meestal warm genuttigde drank, die wordt bereid op basis van water en gedroogde en gebrande pitten van de koffieplant (Coffea spp.) die vanwege hun vorm koffiebonen worden genoemd. Koffie bevat het stimulerende middel cafeïne.[1][2] De meeste soorten in het geslacht Coffea komen van nature voor in tropisch Afrika en op de eilanden in de Indische Oceaan. Ze vinden hun oorsprong in Ethiopië, Jemen en Soedan. </p>
                            <a href="http://127.0.0.1:8000/actors/1"> George Clooney -> </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="thee-content">
                @foreach($dranken as $drank)
                    @if(strpos($drank, 'Thee') !== false)
                        <div class="warmedrankenbox">
                            <h1>{{ $drank->name }}</h1>
                            <p>Thee is een warme drank die wordt gemaakt door infusie van de gedroogde bladeren van de theeplant Camellia sinensis. Alle als thee verkochte producten die niet van deze plant afkomstig zijn (bijvoorbeeld kamillethee of rooibos), zijn dan ook geen echte thee maar kruidenthee.
                        De naam thee komt waarschijnlijk uit het Chinese dialect Minnanyu. </p>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="latte-content">
                @foreach($dranken as $drank)
                    @if(strpos($drank, 'Latte') !== false)
                        <div class="warmedrankenbox">
                            <h1>{{ $drank->name }}</h1>
                            <p>Een latte macchiato is een koffiedrank die bestaat uit laagjes van melk en espresso. Latte betekent melk en macchiato staat voor gevlekt. Wat er ontstaat als er op de juiste wijze espresso aan de latte wordt toegevoegd is een vlek in de melk. Sommigen voegen ook karamel toe, maar dat is niet zoals de Italianen het doen. </p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection