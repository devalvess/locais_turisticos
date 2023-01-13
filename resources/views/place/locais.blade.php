<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Local</h1>
    <a href="/places/create">Criar Local</a>

    <ul>
        @foreach($place as $item)

        <li>

            <a href="/places/show/{{ $item->id }}">
                {{$item->name}}; 
                {{$item->description}}
                {{$item->address}}
            </a>

        </li>
        @endforeach
    </ul>

    <hr>
    <a href="">Praça Central</a>
</body>
</html>