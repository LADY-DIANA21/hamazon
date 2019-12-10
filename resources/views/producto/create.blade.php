<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <form class="form-group" method="POST" action="{{route('producto.store')}}">
    Nombre:
    @csrf
    <input type="text" name="nombre">
    Cantidad:
    <input type="text" name="cantidad">
    <button type="submit">Guardar</button>
    </form>
</head>
<body>
    
</body>
</html>