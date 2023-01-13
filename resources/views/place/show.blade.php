<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Nome:{{ $place->name }}</li>
        <li>Descrição:{{ $place->description }}</li>
        <li>Local:{{ $place->address }}</li>
        <a href="/places/edit/{{ $place->id }}">Editar</a>
    </ul>

    <form action="/destroy/{{ $place->id }}" method="POST">
        @csrf
        <button type="submit">Deletar</button>
    </form>   


</body>
</html>