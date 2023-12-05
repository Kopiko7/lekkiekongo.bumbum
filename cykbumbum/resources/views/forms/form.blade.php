<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <h3> Dane cyk</h3>
    @if($errors->any())
        @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
    @endif
    <form method = "get" action = "Validate">
        <input type = "email" name = "email" placeholder = "Podaj email" value = "{{old('email')}}"> @error('email'){{$message}}@enderror<br><br>
        <input type = "password" name = "pass" placeholder = "Podaj hasło" value = "{{old('pass')}}">@error('pass'){{$message}}@enderror <br><br>
        <input type = "imie" name = "imie" placeholder = "Podaj imie" value = "{{old('imie')}}">@error('imie'){{$message}}@enderror<br><br>
        <input type = "submit" placeholder = "Wyślij"> <br>
</body>
</html>