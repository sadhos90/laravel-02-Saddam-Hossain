<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .bg-body{
            background-color: gray;
        }
    </style>
</head>
<body class="bg-body">
    <h1> Grazie per averci contattato {{$name}}</h1>
    <p>Ti risponderemo al più presto! Ecco il messaggio che ci hai lasciato: </p>
    <p>{{$content}}</p>
    <small>Utente: {{$email}}</small>
</body>
</html>