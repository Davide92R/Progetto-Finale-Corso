<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Become Revisor</title>
</head>
<body>
    <h1>Ciao, {{ $user->name }} ha richiesto di poter diventare revisore</h1>
    <h2>Ecco i suoi dati:</h2>
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
    </ul>
    <p>se vuoi renderlo revisore, clicca qui:</p>
    <a href="{{ route('make.revisor', compact('user'))}}">Rendi revisore</a>
</body>
</html>
