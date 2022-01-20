
{{-- Per prima cosa, creiamo un nuovo progetto Laravel 7, utilizzando questo comando:
`composer create-project --prefer-dist laravel/laravel:^7.0 laravel-primi-passi`
Al termine dell’installazione, entriamo nella cartella del progetto
`cd laravel-primi-passi`
e avviamo l’artisan serve con uno di questi due comandi:
`php artisan serve` oppure `php -S localhost:8000 -t public`
A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view `welcome.blade.php` e creiamo una nostra homepage. Facciamo quindi sì che la rotta `/` visualizzi `home.blade.php`
Inizialmente stampiamo un *Hello World*, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
-Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione `route()`
- Almeno in una pagina passare dei $data dalla rotta e stamparli in pagina facendo uso di istruzioni blade --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    
    <a href="{{ route('home') }}">home</a>
    <a href="{{ route('about') }}">about</a>
    <a href="{{ route('contacts') }}">contatti</a>
    <a href="{{ route('info') }}">info</a>
    <h1>Home</h1>
    <h2>HELLO WORLD</h2>

    <div>
        {{ $name }}
    </div>

    @foreach ( $abbigliamenti as $abbigliamento )
        
           <h3> {{ $abbigliamento }} </h3> 

    @endforeach

    @if ($giusto)
        <div> é corretto </div>
    @else
        <div> no </div>
   @endif

</body>
</html>