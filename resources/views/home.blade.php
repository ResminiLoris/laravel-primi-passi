<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>benvenuto {{ $name }} {{ $surname }}</h1>
    <nav>
        <ul>
            <li>
                <a href="{{url('/contatti')}}">contatti</a>
            </li>
            <li>
                <a href="{{url('/blog')}}">blog</a>
            </li>
            <li>
                <a href="{{url('/gallery')}}">gallery</a>
            </li>
            <li>
                <a href="{{url('/social')}}">social</a>
            </li>
        </ul>
    </nav>
</body>
</html>