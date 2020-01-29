<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

    <title>Planetas</title>

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0;
        }
        .content {
            text-align: center;
        }

        .title {
            font-size: 60px;
            color: #000000;
        }

        .linksa > a{
            color: #000000;
            border:1px solid #000000;
            border-radius:5px;
            letter-spacing: .1rem;
            display:inline-block;
            cursor:pointer;
            font-size:15px;
            padding:3px 10px;
            text-decoration: none;
        }
        .linksb > a{
            color: #000000;
            font-weight: bold;
            letter-spacing: .1rem;
            display:inline-block;
            cursor:pointer;
            font-size:15px;
            padding:3px 10px;
            text-decoration: none;
        }

        .m-t-l-title {
            top: 30px;
            margin-top: 2%;
        }
        .m-t-l-links{
            top: 40%;
            left: 0%;
            width: 100%;
            text-align: center;
            position: absolute;
        }

    </style>
</head>
<body>
    <div class="title m-t-l-title content">
            Planetas
    </div>
    <div class="m-t-l-links">
        <p class="linksa">
            <a href="{{ route('planet.create') }}">Cadastrar</a>
            <a href="{{ route('planet.read') }}">Buscar</a>
            <a href="{{ route('planet.update') }}">Modificar</a>
            <a href="{{ route('planet.delete') }}">Apagar</a>
        </p>
        <p class="linksb">
            <a href="{{ route('welcome')}}">Voltar</a>
        </p>
    </div>
</body>
</html>