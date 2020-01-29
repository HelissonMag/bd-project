<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

    <title>Modificar Planeta</title>

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

        .bold{
            font-weight: bold;
        }

        .title {
            font-size: 60px;
            color: #000000;
        }

        .margin-text{
            font-size: 20px;
            margin-top: 17%;
        }

        .links > a{
            color: #000000;
            background-color: #ffffff;
            border:1px solid #000000;
            border-radius:5px;
            letter-spacing: .1rem;
            display:inline-block;
            cursor:pointer;
            font-size:15px;
            padding:3px 10px;
            text-decoration: none;
        }
        
        .margin-title {
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
    <div class="title margin-title content">
        Modificar Planeta
    </div>
    <div class="m-t-l-links">
        <p>
            Planeta
            <output class="bold">{{ $request->name}}</output>
            att para
            <output class="bold">{{ $request->newName }}</output>
            e galaxia 
            <output class="bold">{{ $request->newGalaxia }}</output>
        </p>
        <p class="links">
            <a href="{{ url('/planet') }}">Voltar</a>
        </p>
    </div>
</body>
</html>