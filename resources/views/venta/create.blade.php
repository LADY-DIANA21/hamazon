<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
<h1>
<small class="text-muted">Registro formulario de ventas</small>
    </h1>
    <div class="container">
        <form class="form-group" method="POST" action="{{ route('venta.store') }}">
            @csrf
            @foreach($ventas as $venta)
            <div class="form-group row">
                <label for="venta"  class="col-sm-2 col-form-label">Producto:</label>
                <div class="col-sm-10">
                    <input name="nombre" type="text" class="form-control" value="{{$producto->nombre}}">
                </div>
            </div>  
            <div class="form-group row">
                <label for="precio" class="col-sm-2 col-form-label">Precio del producto:</label>
                <div class="col-sm-10">
                    <input name="descripcion" type="text" class="form-control" value="{{$producto->precio}}">
                </div>
            </div> 
            @endforeach 
            <div class="form-group row">
                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-10">
                    <input name="precio" type="text" class="form-control" placeholder="Cantidad del producto">
                </div>
                
            <button type="submit" class="btn btn-outline-primary">Guardar</button> 
        </form>
    </div>





</body>
</html>