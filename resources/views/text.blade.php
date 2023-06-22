<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Font -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Style -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: grey;
            height: 100vh;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            font-family: 'Nunito', sans-serif;
            position: relative;
        }


        header {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;

            width: 100%;
            height: fit-content;
            background-color: black;
            display: flex;
        }

        header ul {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5em;

            margin-top: 1.5em;
            margin-bottom: 1.5em;
            list-style-type: none;
        }

        header a {
            color: white;
            text-decoration: none;
            font-size: 2em;
        }

        h3 {
            width: 80%;
        }
    </style>
</head>

<body>

    <header>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/welcome">Welcome</a></li>
            <li><a href="/text">Testo Esercizio</a></li>
            <li><a href="/topten">Top 10 GB Games</a></li>
        </ul>
    </header>

    <h3>
        Esercizio di oggi: <br>
        nome repo: laravel-primi-passi <br>
        Ciao ragazzi, <br>
        oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel! <br>
        creiamo la cartella del progetto con il nome della repo, quindi la apriamo in VS Code e apriamo un tab del terminale dove diamo il comando di installazione di Laravel 9: <br>
        composer create-project laravel/laravel:^9.3 . <br>
        (ricordatevi che la cartella nella quale lanciate il comando deve essere vuota altrimenti l'installazione non verrà eseguita)
        Al termine dell'installazione avviamo l'artisan serve con uno di questi due comandi: <br>
        php artisan serve <br>
        oppure (solo se l'artisan serve non ha funzionato): php -S localhost:8000 -t public <br>
        A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / (home page del sito) visualizzi home.blade.php <br>
        Facciamo in modo che home.blade.php visualizzi un Hello World (inserito in un HTML valido e completo). <br>
        Bonus: <br>
        Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine. <br>
    </h3>

</body>

</html>