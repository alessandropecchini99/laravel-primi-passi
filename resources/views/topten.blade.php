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

        main {
            text-align: center;
        }

        h1 {
            margin-bottom: 1em;
        }

        h3 {
            margin-bottom: 10px;
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

    <main>
        <h1>Classifica dei 10 migliori giochi per GameBoy Classic:</h1>
        <h3>1° - Tetris (1984)</h3>
        <h3>2° - Super Mario Bros. (1990)</h3>
        <h3>3° - Donkey Kong (1981)</h3>
        <h3>4° - Little Big Planet (1983)</h3>
        <h3>5° - River City Ransom (1983)</h3>
        <h3>6° - Bubble Bobble (1987)</h3>
        <h3>7° - Sonic the Hedgehog (1991)</h3>
        <h3>8° - Gradius (1994)</h3>
        <h3>9° - GoldenEye (1995)</h3>
        <h3>10° - Advance Wars (1994)</h3>
    </main>

</body>

</html>