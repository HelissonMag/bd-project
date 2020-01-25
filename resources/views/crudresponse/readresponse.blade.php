<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Planet ReadResponse</title>

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Verdana', sans-serif;
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

        .links > a{
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

        .margin-title {
            left: 30px;
            top: 30px;
            position: absolute;
        }
        .margin-text{
            font-size: 15px;
            margin-top: 17%;
        }

        .m-t-l-links{
            margin-top: 1%;
        }

    </style>
</head>
<body>
    <div class="title margin-title content">
        ReadResponse
    </div>
    <p class="margin-text content">
        Planeta 
        <output class="bold">{{ $request->name }}</output>
        foi encontrado.
    </p>
    <p class="links margin-links content">
        <a href="{{ url('/planet') }}">Back</a>
    </p>
</body>
</html>