<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Local</h1>
    
    <form action="/update/{{ $place->id }}" method="POST">
        @csrf
        <input  name="name" value="{{ $place->name }}">
        <input  name="description" value="{{ $place->description }}">
        <input type="text" required name="address" value="{{ $place->address }}">
        <button type="submit">Enviar</button>
    </form>

</body>
</html>