<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <form class="form-group" method="post" action="{{route('producto.update', $producto)}}">
@csrf @method('PATCH')
    Nombre:
    <input type="text" name="nombre" old value="{{old('nombre',$producto->nombre)}}">>
    Cantidad:
    <input type="text" name="cantidad" value="{{old('cantidad',$producto->cantidad)}}">
    <button type="submit">Guardar</button>
    </form>
</head>
<body>
    
</body>
</html>