<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crea un nuevo Alumno</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <label for="">Nombre y Apellidos</label>
        <input type="text" name="name" id="nombre">
        <label for="">Edad</label>
        <input type="number" name="edad" id="edad">
        <label for="">Telefono</label>
        <input type="tel" name="telephone" id="telephone">
        <label for="">Direccion</label>
        <input type="text" name="address" id="address">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
