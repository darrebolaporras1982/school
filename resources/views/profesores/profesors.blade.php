<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead><th>Nombre y Apellidos</th><th>Profesion</th><th>Grado Académico</th><th>Teléfono</th></thead>
        @foreach($profesors as $profesor)
        <tr>
        <td>{{-- <a href="{{ route('show',["id"=>$alumno->id]) }}"> --}}{{$profesor->nom_ape}}{{-- </a> --}}</td><td>{{ $profesor->profesion }}</td><td>{{ $profesor->grado_academico }}</td><td>{{ $profesor->telefono }}</td> <!--aqui hago un link que me lleva a los datos del alumno-->
        </tr>
    @endforeach
    </table>
</body>
</html>
