<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Cerveza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        
        <div class="card">
            <h1 clas="card-title">Crear cerveza</h1>
            <div class="card-body">
                <form action="crearCervezaGuardar.php" method="POST">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input required type="text" name="nombre" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Marca:</label>
                        <input required type="text" name="marca" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Precio:</label>
                        <input required type="number" name="precio" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>

</html>