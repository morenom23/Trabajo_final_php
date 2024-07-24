<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>Login</h2>    
        <div class="card">
            <div class="card-body">
                <form method="POST" action="login_captura.php">
                    <div class="form-group">
                        <label>Usuario</label>
                        <input  class="form-control" type="text" name="usuario" />            
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input  class="form-control" name="password" type="password">
                    </div>  
                    <div class="form-group mt-2">
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </div>      
                </form> 
            </div>
        </div>
    </div>
</body>
</html>