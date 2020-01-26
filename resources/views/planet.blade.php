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
            height: 100vh;
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
            left: 30px;
            top: 30px;
            position: absolute;
        }
        .m-t-l-links{
            top: 40%;
            left: 0%;
            width: 100%;
            text-align: center;
            position: relative;
        }

    </style>
</head>
<body>
    <div class="title m-t-l-title content">
            Planetas
    </div>
    <div class="m-t-l-links">
        <p class="linksa">
            <a href="{{ route('planet.create') }}">Create</a>
            <a href="{{ route('planet.read') }}">Read</a>
            <a href="{{ route('planet.update') }}">Update</a>
            <a href="{{ route('planet.delete') }}">Delete</a>
        </p>
        <p class="linksb">
            <a href="{{ route('welcome')}}">Back</a>
        </p>
    </div>
</body>
</html>