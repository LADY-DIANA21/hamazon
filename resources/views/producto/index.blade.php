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
    <thead>	
    <tr>#</tr>
    <tr>Nombre</tr>
    <tr>Cantidad</tr>
    </thead>
 <tbody>
 @foreach($productos as $producto)
 <th>{{ $producto-> id }}</th>
 <td>{{ $producto-> nombre }}</td>
 <td>{{ $producto-> cantidad }}</td>
 <td><a href="{{route('producto.edit', $producto)}}">EDITAR</a></td>
 @endforeach
 </tbody>
    </table>
</body>
</html>