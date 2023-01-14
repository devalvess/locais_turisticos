<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Locais</h1>
    <a href="/places/create">Criar Local</a>

    <hr>

   
    @foreach($place as $item)

         <a href="/places/show/{{ $item->id }}">
            {{$item->name}} <br>
        </a>

    @endforeach
    

</body>
</html>