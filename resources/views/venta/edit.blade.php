<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>VENTAS 
        <small class="text-muted">Editar Ventas</small>
    </h2>
    <div class="container">
        <form class="form-group" method="POST" action="{{ route('venta.update', $venta) }}">
            @csrf @method('PATCH')
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                <input name="nombre" type="text"  class="form-control" value="{{old('nombre', $venta->nombre)}}">
                </div>
            </div>  
           
            <div class="form-group row">
                <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                <div class="col-sm-10">
                    <input name="precio" type="index" class="form-control" value="{{old('precio', $venta->precio)}}">
                </div>
            </div> 
            
            <div class="form-group row">
                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-10">
                    <input name="cantidad" type="text" class="form-control" value="{{old('cantidad', $venta->cantidad)}}">
                </div>
            </div> 
            <button type="submit" class="btn btn-outline-primary">Guardar</button> 
        </form>
    </div>
</body>
</html>