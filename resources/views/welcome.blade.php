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

    <h1>Welcome in my first Lavarel Site!</h1>

</body>

</html>