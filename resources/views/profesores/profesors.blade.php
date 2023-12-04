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
        <tbody>
            <tr>
                <td>{{$profesor->nom_ape}}</td><td>{{ $profesor->profesion }}</td><td>{{ $profesor->grado_academico }}</td><td>{{ $profesor->telefono }}</td> <!--aqui hago un link que me lleva a los datos del alumno-->
                @foreach ($profesor ->cursos as $curso)
                    <td>{{ $curso->nombre }}</td>
                @endforeach
                </tr>
        </tbody>
    @endforeach
    </table>
</body>
</html>
