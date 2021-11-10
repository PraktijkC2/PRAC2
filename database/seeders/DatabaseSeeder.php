<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actors;
use App\Models\Boeken;
use App\Models\Dranken;
use App\Models\Films;
use App\Models\Gereedschap;
use App\Models\Songs;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Actors - Goerge Clooney
        $actors = new Actors();
        $actors->voornaam = "Goerge";
        $actors->achternaam = "Clooney";
        $actors->info = "George Timothy Clooney (Lexington, Kentucky, 6 mei 1961) is een Amerikaans acteur, regisseur, scenarioschrijver en producent met meer dan dertig filmprijzen en nominaties op zijn naam. Voor de film Syriana won hij een Oscar voor beste mannelijke bijrol. Tevens won hij als producent een Oscar voor beste film voor Argo. Ook kreeg hij Oscarnominaties voor zijn rollen in Michael Clayton en The Descendants, een European Film Award (voor Good Night, and Good Luck) en meerdere Golden Globes (voor Syriana en O Brother, Where Art Thou?).'";
        $actors->image = "/img/george.jpg";
        $actors->url = "https://nl.wikipedia.org/wiki/George_Clooney";
        $actors->save();

        //Actors - Timoty Dalton
        $actors = new Actors();
        $actors->voornaam = "Goerge";
        $actors->achternaam = "Clooney";
        $actors->info = "Dalton groeide op in Manchester. Nadat hij zijn school had afgemaakt, ging hij naar het National Youth Theatre. Hij studeerde twee jaar lang aan de Royal Academy of Dramatic Art. In 1966 ging hij naar het Birmingham Repertory Theatre, waar hij hoofdrollen speelde.";
        $actors->image = "/img/timothy.jpg";
        $actors->url = "https://nl.wikipedia.org/wiki/Timothy_Dalton";
        $actors->save();
        
        //Actors - Luke Skywalker
        $actors = new Actors();
        $actors->voornaam = "Luke";
        $actors->achternaam = "Skywalker";
        $actors->info = "Luke Skywalker is een personage uit de Star Warssaga, gespeeld door acteur Mark Hamill. Luke is de tweelingbroer van prinses Leia. Hun ouders zijn Padmé Amidala en Anakin Skywalker. Skywalker werd opgevoed door zijn oom Owen Lars en tante Beru Whitesun Lars.";
        $actors->image = "/img/luke.png";
        $actors->url = "https://nl.wikipedia.org/wiki/Luke_Skywalker";
        $actors->save();

        //Actors - Darth Vader
        $actors = new Actors();
        $actors->voornaam = "Darth";
        $actors->achternaam = "Vader";
        $actors->info = "Darth Vader is een personage uit de Star Wars-films. Hij is als Sith-leerling ondergeschikt aan keizer Palpatine, ook bekend als Darth Sidious. In de jaren 1977, 1980 en 1983 werd Darth Vader gespeeld door acteur David Prowse en stuntman Bob Anderson. Zijn stem werd echter ingesproken door James Earl Jones, omdat diens stem veel zwaarder, duisterder en dreigender klonk.Darth Vader is een dienaar van de kwaadaardige keizer Palpatine (Darth Sidious) en een wreed persoon. Hij is vooral te herkennen aan zijn donkere kostuum, zijn zware stem, en zijn enorme omvang. Hij wordt zowel gevreesd door de Rebellen, als door zijn eigen troepen.";
        $actors->image = "/img/vader.png";
        $actors->url = "https://nl.wikipedia.org/wiki/Darth_Vader";
        $actors->save();

        //Boeken - Undisputed Truth
        $boeken = new Boeken();
        $boeken->titel = "Undisputed Truth";
        $boeken->omschrijving = "One of the most talked-about and Bestselling books of last year, this is the no-holds-barred autobiography of a sporting legend driven to the brink of self-destruction the bestseller that has everyone talking. In this, his first, autobiography, Iron Mike Tyson pulls no punches and lays Are the story of his remarkable life and career. Co-written with Larry Sloman, author of Antony Keidiss best-selling memoir Scar Tissue, this is a visceral, and unputdown-able story of a man born and raised to brutality, who reached the heights of stardom before falling to crime, substance abuse and infamy. Full of all the controversy and complexity that you would expect from a man who delighted as much as he shocked, this is a book that will surprise and reveals a fascinating character beneath the exterior of violence. If you think you know all about Mike Tyson, read this book and think again.";
        $boeken->auteur = "Mike Tyson";
        $boeken->pages = 608;
        $boeken->price = 8.5;
        $boeken->image = "/img/undisputed.jpg";
        $boeken->save();

        //Boeken - The Psychology of Money
        $boeken = new Boeken();
        $boeken->titel = "The Psychology of Money";
        $boeken->omschrijving = "The Psychology of Money', 'Doing well with money isn’t necessarily about what you know. It’s about how you behave. And behavior is hard to teach, even to really smart people. Money―investing, personal finance, and business decisions―is typically taught as a math-based field, where data and formulas tell us exactly what to do. But in the real world people don’t make financial decisions on a spreadsheet. They make them at the dinner table, or in a meeting room, where personal history, your own unique view of the world, ego, pride, marketing, and odd incentives are scrambled together. In The Psychology of Money, award-winning author Morgan Housel shares 19 short stories exploring the strange ways people think about money and teaches you how to make better sense of one of life’s most important topics.";
        $boeken->auteur = "Morgan Housel";
        $boeken->pages = 256;
        $boeken->price = 12.5;
        $boeken->image = "/img/money.jpg";
        $boeken->save();


        //Dranken - fris dranken
        $dranken = new Dranken();
        $dranken->name = "frisdranken";
        $dranken->categorie = "Pagina over fris dranken";
        $dranken->description = "Deze pagina is voor fris dranken";
        $dranken->url = "www.coca-cola.nl";
        $dranken->save();

        //Dranken - warme dranken
        $dranken = new Dranken();
        $dranken->name = "warmedranken";
        $dranken->categorie = "Pagina over warme dranken";
        $dranken->description = "Deze pagina is voor warme dranken";
        $dranken->url = "www.nespresso.nl";
        $dranken->save();

        //Films
        $films = new Films();
        $films->titel = "James Bond";
        $films->samenvatting = "Lijst van alle films van James Bond die Roger Moore in heeft gespeeld";
        $films->director = "Harry Saltzman";
        $films->save();
        
        //Gereedschap - Hamers
        $gereedschap = new Gereedschap();
        $gereedschap->name = "Hamers";
        $gereedschap->categorie = "none";
        $gereedschap->description = "Een hamer is een klop- of slagwerktuig. Een hamer bestaat uit een steel, het handvat, met aan het eind de zogenaamde hamerkop.\r\n\r\nDe vorm en grootte en het materiaal van de hamerkop en de lengte van de steel hangen sterk af van het type hamer. Bij hamers met een ijzeren hamerkop staat vaak het aantal grammen in het metaal geslagen. Voor speciale uitvoeringen, zoals voor percussie-instrumenten, wordt ook de term mallet (uit het Engels) gebruikt.";
        $gereedschap->url = "https://nl.wikipedia.org/wiki/Cirkelzaag";
        $gereedschap->url = "https://nl.wikipedia.org/wiki/Hamer_(gereedschap)";
        $gereedschap->save();

         //Gereedschap - Handzagen
         $gereedschap = new Gereedschap();
         $gereedschap->name = "Handzagen";
         $gereedschap->categorie = "zagen";
         $gereedschap->description = "Zagen is een verspanende bewerking die met de hand of met een machine kan worden uitgevoerd. Het hiervoor gebruikte gereedschap of machine is voorzien van een zaagblad. Met de tanden hiervan, die snijkanten hebben, kan een snede in het te bewerken materiaal worden gemaakt. Meestal wordt het materiaal doorgesneden. De verplaatsing van de zaag door het materiaal noemen we de aanzet of de voeding. Het zaagblad voert de snijbeweging uit, de voedingsbeweging wordt teweeg gebracht door druk uit te oefenen op het zaagblad, of op het te bewerken materiaal.";
         $gereedschap->url = "https://nl.wikipedia.org/wiki/Hamer_(gereedschap)";
         $gereedschap->save();  

         //Gereedschap - Schroevendraaiers
         $gereedschap = new Gereedschap();
         $gereedschap->name = "Schroevendraaiers";
         $gereedschap->categorie = "Gereedschap";
         $gereedschap->description = "Een cirkelzaag (of radiaalzaag) is een zaag met een blad in de vorm van een stalen schijf, die met een motor tot een zeer hoog toerental wordt aangedreven. De schijf kan in een zaagtafel zijn gemonteerd waarover het te zagen materiaal wordt aangevoerd, of ingebouwd in een constructie samen met een elektromotor tot draagbare handcirkelzaag. Deze heeft een minder krachtige motor en kan ook dunner materiaal zagen. Cirkelzaagbladen bestaan in soorten en maten, met allerlei verschillende vertandingen, en ook de diameter kan sterk verschillen (normaal is ca. 25 cm, maar industriële cirkelzagen met veel grotere bladen bestaan ook). De maximale zaagdiepte wordt bepaald door de straal van het cirkelzaagblad. Een cirkelzaag die bedoeld is om latten, buizen, houten balken en dergelijke te zagen wordt ook wel een afkorter of afkortzaag genoemd.";
         $gereedschap->url = "https://nl.wikipedia.org/wiki/Schroevendraaier";
         $gereedschap->save(); 
         
         //Gereedschap - Beitel
         $gereedschap = new Gereedschap();
         $gereedschap->name = "Beitel";
         $gereedschap->categorie = "none";
         $gereedschap->description = "Een moderne beitel is een langwerpig stuk gereedschap van staal met aan één zijde een scherpe snede. Een beitel voor houtbewerking heeft meestal een houten of kunststoffen handvat ook wel hecht genoemd of is onderdeel van een schaaf. De snijkant wordt vouw genoemd. Verder zijn er beitels voor onder andere steen- en metaalbewerking. Beitels kunnen machinaal en handmatig toegepast worden.";
         $gereedschap->url = "https://nl.wikipedia.org/wiki/Handzaag";
         $gereedschap->url = "https://nl.wikipedia.org/wiki/Cirkelzaag";
         $gereedschap->save(); 

        //Songs - Madness
        $songs = new Songs();
        $songs->songname = "Madness";
        $songs->songtekst = "I, I can't get these memories out of my mind And some kind of madness has started to evolve I, I tried so hard to let you go But some kind of madness is swallowing me whole, yeah I have finally seen the light And I have finally realized What you mean Oh oh oh And now, I need to know is this real loveOr is it just madness keeping us afloat? And when I look back at all the crazy fights we had Like some kind of madness Was taking control Yeah And now I have finally seen the light And I have finally realized What you need Mm And now I have finally seen the end (Finally seen the end) And I'm not expecting you to care (Expecting you to care) But I have finally seen the light (Finally seen the light) I have finally realized (Realized) I need to love I need to love Come to me, Trust in your dream Come on and rescue me Yes I have known, I can be wrong Maybe I'm too headstrong Our love is Madness";
        $songs->artiest = "Muse";
        $songs->url = "https://nl.wikipedia.org/wiki/Madness";
        $songs->image = "image/undisputed.jpg";
        $songs->textcolor = "#000000";
        $songs->achtergrond = "#cc0000";
        $songs->save();
        
        //Songs - Bohemian Rhapsody
        $songs = new Songs();
        $songs->songname = "Bohemian Rhapsody";
        $songs->songtekst = "Is this the real life Is this just fantasy Caught in a landslide No escape from reality Open your eyes Look up to the skies and see I'm just a poor boy I need no sympathy Because I'm easy come, easy go A little high, little low Anyway the wind blows, doesn't really matter to me To me Mama, just killed a man Put a gun against his head Pulled my trigger, now he's dead Mama, life had just begun But now I've gone and thrown it all away Mama ooh Didn't mean to make you cry If I'm not back again this time tomorrow Carry on, carry on, as if nothing really matters Too late,my time has come Sends shivers down my spine Body's aching all the time Goodbye everybody, I've got to go Gotta leave you all behind And face the truth Mama ooh (any way the wind blows) I don't want to die I sometimes wish I'd never been born at all I see a little silhouetto of a man Scaramouche,scaramouche will you do the Fandango Thunderbolt and lightning, very, very frightening me Galileo, Galileo Galileo, Galileo Galileo figaro Magnifico But I'm just a poor boy And nobody loves me He's just a poor boy from a poor family Spare him his life from this monstrosity Easy come easy go Will you let me go Bismillah! No,we will not let you go, let him go Bismillah! We will not let you go, let him go Bismillah! We will not let you go, let me go Will not let you go, let me go Will not let you go, let me go No, no, no, no, no, no, no Mama mia, mama mia Mama mia let me go Behelzebub has a devil put aside for me for me, for me So you think you can stone me And spit in my eye So you think you can love me And leave me to die Oh baby, can't do this to me baby Just gotta get out Just gotta get right outta here Nothing really matters Anyone can see Nothing really matters Nothing really matters to me Any way the wind blows";
        $songs->artiest = "Queen";
        $songs->url = "https://nl.wikipedia.org/wiki/Bohemian_Rhapsody";
        $songs->image = "image/undisputed.jpg";
        $songs->textcolor = "#000000";
        $songs->achtergrond = "#4682b4";
        $songs->save();

        //Songs - Uprising
        $songs = new Songs();
        $songs->songname = "Uprising";
        $songs->songtekst = "Paranoia is in bloom The PR transmissions will resume They'll try to push drugs that keep us all dumbed down And hope that we will never see the truth around (So come on) Another promise, another scene Another packaged lie to keep us trapped in greed And all the green belts wrapped around our minds And endless red tape to keep the truth confined (So come on) They will not force us They will stop degrading us They will not control us We will be victorious (So come on) Interchanging mind control Come, let the revolution take its toll If you could flick the switch and open your third eye You'd see that we should never be afraid to die (So come on) Rise up and take the power back It's time the fat cats had a heart attack You know that their time's coming to an end We have to unify and watch our flag ascend (So come on) They will not force us They will stop degrading us They will not control us We will be victorious (So come on) They will not force us They will stop degrading us They will not control us We will be victorious (So come on)";
        $songs->artiest = "Muse";
        $songs->url = "https://nl.wikipedia.org/wiki/Uprising_(single)";
        $songs->image = "image/undisputed.jpg";
        $songs->textcolor = "#cc0000";
        $songs->achtergrond = "#317f43";
        $songs->save();

        //Songs - Plug in Baby
        $songs = new Songs();
        $songs->songname = "Plug in Baby";
        $songs->songtekst = "I've exposed your lies, baby The underneath no big surprise Now it's time for changing And cleansing everything To forget your love My plug in baby Crucifies my enemies When I'm tired of giving My plug in baby In unbroken virgin realities Is tired of living Don't confuse Baby you're gonna lose Your own game Change me And replace the envying To forget your love My plug in baby Crucifies my enemies When I'm tired of giving My plug in baby In unbroken virgin realities And tired of living And I've seen your loving Mine is gone";
        $songs->artiest = "Muse";
        $songs->url = "https://nl.wikipedia.org/wiki/Plug_In_Baby";
        $songs->image = "image/undisputed.jpg";
        $songs->textcolor = "#000000";
        $songs->achtergrond = "#b97d4b";
        $songs->save();

        //Songs - We are the Champions
        $songs = new Songs();
        $songs->songname = "We are the Champions";
        $songs->songtekst = "I've paid my dues Time after time I've done my sentence But committed no crime And bad mistakes I've made a few I've had my share of sand kicked in my face But I've come through We are the champions - my friends And we'll keep on fighting till the end We are the champions We are the champions No time for losers 'cause we are the champions - of the world I've taken my bows And my curtain calls You brought me fame and fortune and everything that goes with it - I thank you all But it's been no bed of roses No pleasure cruise I consider it a challenge before the whole human race and I ain't gonna lose We are the champions - my friends And we'll keep on fighting till the end We are the champions We are the champions No time for losers 'cause we are the champions - of the world We are the champions - my friends And we'll keep on fighting till the end We are the champions We are the champions No time for losers 'cause we are the champions - of the world";
        $songs->artiest = "Queen";
        $songs->url = "https://nl.wikipedia.org/wiki/We_Are_the_Champions";
        $songs->image = "image/undisputed.jpg";
        $songs->textcolor = "#000000";
        $songs->achtergrond = "#4682b4";
        $songs->save();   
    }
}
