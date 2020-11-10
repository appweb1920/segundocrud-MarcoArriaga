<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita pieza</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-3">Editando datos...</h1>

    <form action="update" method="POST" class="w-75 p-3">
        @csrf
        <div class="row">
            <input type="hidden" name="id" value="{{$pieza->id}}">
            <div class="col">
                Nombre:<input type="text" class="form-control" value="{{$pieza->nombre}}" name="nombre">
            </div>
            <div class="col">
                Descripcion:<input type="text" class="form-control" value="{{$pieza->descripcion}}" name="descripcion">
            </div>
            <div class="col">
                Cantidad:<input type="number" class="form-control" value="{{$pieza->numeroPiezas}}" name="numeroPiezas">
            </div>
            <div class="col">
                Costo:<input type="number" step="0.01" class="form-control" value="{{$pieza->costoPieza}}" name="costoPieza">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </form>
    
</body>
</html>