<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

    <title>Login</title>

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
        .bold{
            font-weight: bold;
        }

        .links > a, input{
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
        

        .text{
            color: #000000;
            font-size: 15px;
        }

    </style>
</head>
<body>
    <div class="title m-t-l-title content">
        Login
    </div>
    <div class="m-t-l-links">
        <p class="text">
            Usuário: 
            <output class="bold">{{$request->name}}</output>
            fez login.
        </p>
        <p class="links content">
            <a href="{{ route('welcome')}}">Próximo</a>
        </p>
    </div>
</body>
</html>
