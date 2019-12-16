@extends('layout.pantalla')
@section('title','Pagina Principal')

@section('contenido')
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
@endsection