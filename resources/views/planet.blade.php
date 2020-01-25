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
        .m-t-l-links-a{
            top: 50%;
            left: 50%;
            margin-right: -50%;
            margin-bottom: -50%;
            transform: translate(-50%,-50%);
            position: absolute;
        }
        .m-t-l-links-b{
            top: 60%;
            left: 50%;
            margin-right: -50%;
            margin-bottom: -50%;
            transform: translate(-50%,-50%);
            position: absolute;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }
        .m-t{
            margin-top: 20%;
        }
        .m-t-l-b{
            margin-top: 1%;
        }


    </style>
</head>
<body>
    <div class="title m-t-l-title content">
            Planetas
    </div>
    <div class="flex-center position-ref m-t">
        <div class="linksa content">
            <a href="{{ route('planet.create') }}">Create</a>
            <a href="{{ route('planet.read') }}">Read</a>
            <a href="{{ route('planet.update') }}">Update</a>
            <a href="{{ route('planet.delete') }}">Delete</a>
        </div>
    </div>
    <div class="m-t-l-b content linksb">
        <a href="{{ route('welcome')}}">Back</a>
    </div>
</body>
</html>