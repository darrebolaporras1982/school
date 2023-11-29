<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nombre y Apellidos de los Alumnos</h1>
    <table>
        <thead><th>Nombre y Apellidos</th></thead>
        @foreach($alumnos as $alumno)
        <tr>
        <td><a href="{{ route('show',["id"=>$alumno->id]) }}">{{$alumno->nom_ape}}</a> <!--aqui hago un link que me lleva a los datos del alumno-->
        </tr>
    @endforeach
    </table>


</body>
</html>
