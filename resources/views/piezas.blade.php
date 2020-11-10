<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piezas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-3">Piezas</h1>
        <form action="/registroPieza" method="POST" class="w-75 p-3">
            @csrf
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="Nombre"  name="nombre">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Descripcion" name="descripcion">
                </div>
                <div class="col">
                <input type="number" class="form-control" placeholder="Cantidad"  name="numeroPiezas">
                </div>
                <div class="col">
                <input type="number" step="0.01" class="form-control" placeholder="Costo" name="costoPieza">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            </div>
        </form>

    <table class="table table-hover table-bordered w-75 text-center mx-2">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Precio</th>
                    <th>Editar</th>
                    <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
        @if(!is_null($piezas))
            @foreach($piezas as $p)
                <tr>
                    <td><p>{{$p->nombre}}</p></td>
                    <td><p>{{$p->descripcion}}</p></td>
                    <td><p>{{$p->numeroPiezas}}</p></td>
                    <td><p>{{$p->costoPieza}}</p></td>
                    <td><a class="btn btn-primary" href="/editarPieza/{{$p->id}}"><i class="fas fa-edit"></i></a></td>
                    <td><a class="btn btn-primary" href="/borrar/{{$p->id}}"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


</body>
</html>