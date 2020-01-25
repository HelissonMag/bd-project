<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <title>Corpos Celestes</title>

    <style>
        html,
        body {
            background-color: #FFFFFF;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            width: 100vw;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            color: #000000;
        }

        .links > a {
            color: #000000;
            border: 1px solid #000000;
            border-radius: 5px;
            letter-spacing: .1rem;
            display: inline-block;
            cursor: pointer;
            font-size: 15px;
            padding: 6px 10px;
            text-decoration: none;
        }

        .m-b-title {
            margin-bottom: 30px;
        }

        .m-t {
            margin-top: 20%;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-title m-t">
                Corpos Celestes
            </div>
            <div class="links">
                <a href="{{ url('/planet') }}">Planetas</a>
            </div>
        </div>
    </div>
</body>

</html>