<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>El alumno que buscas es:</h1>
    {{ $alumno->edad }} - {{ $alumno->telefono }} - {{ $alumno->direccion }}

    <a href="{{ route('edit',["id"=>$alumno->id]) }}">Editar datos de {{ $alumno->nom_ape }}</a>
    <a href="{{ route('delete',["id"=>$alumno->id]) }}">Eliminar</a>
</body>
</html>
