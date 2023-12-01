<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('editstore',["alumno"=>$alumno->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nombre y Apellidos</label>
        <input type="text" name="name" id="nombre" value="{{ $alumno->nom_ape }}">
        <label for="">Edad</label>
        <input type="number" name="edad" id="edad" value="{{ $alumno->edad }}">
        <label for="">Telefono</label>
        <input type="tel" name="telephone" id="telephone" value="{{ $alumno->telefono }}">
        <label for="">Direccion</label>
        <input type="text" name="address" id="address" value="{{ $alumno->direccion }}">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
