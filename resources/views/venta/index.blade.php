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
    <tr>Precio</tr>
    <tr>Cantidad</tr>
    </thead>
 <tbody>
 @foreach($ventas as $venta)
 <th>{{ $venta-> id }}</th>
 <td>{{ $venta-> nombre }}</td>
 <td>{{ $venta-> precio }}</td>
 <td>{{ $venta-> cantidad }}</td>
 <td><a href="{{route('venta.edit', $venta)}}">EDITAR</a></td>
 @endforeach
 </tbody>
    </table>
</body>
</html>