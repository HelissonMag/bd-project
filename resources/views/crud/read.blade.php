<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <title>Buscar Planeta</title>

    <style>
        html,
        body {
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


        .links > a, input {
            color: #000000;
            background-color: #ffffff;
            border: 1px solid #000000;
            border-radius: 5px;
            letter-spacing: .1rem;
            display: inline-block;
            cursor: pointer;
            font-size: 15px;
            padding: 3px 10px;
            text-decoration: none;
        }

        .m-t-l-title {
            left: 30px;
            top: 30px;
            position: absolute;
        }

        .m-t-l-text-fields {
            top: 50%;
            left: 50%;
            margin-right: -50%;
            margin-bottom: -50%;
            transform: translate(-50%, -50%);
            position: absolute;
        }

        .text {
            color: #000000;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="title m-t-l-title content">
        Buscar Planeta
    </div>
    <div class="m-t-l-text-fields ">
        <form action="{{route('planet.readresponse')}}" method="get">
            @csrf
            <p class="text">
                Nome do planeta
            </p>
            <p>
                <input type="text" name="name" placeholder="informe o Planeta" required="required">
            </p>
            <p class="links content">
                <input type="submit" name="send" value="Buscar">
                <a href="{{route('planet')}}" name="back">Voltar</a>
            </p>
        </form>
    </div>
</body>

</html>