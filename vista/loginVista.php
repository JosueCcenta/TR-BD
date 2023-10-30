<?php 
if($_GET){
   if($error=$_GET['error']==1){
    print("<div class='alert alert-danger' role='alert'>Error de Inicio de Sesion, Comprobar Credenciales</div>");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <!-- Incluye los estilos de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Iniciar Sesión</h1>
        <div class="container mt-5 w-50">
            <form action="../controlador/LoginControlador.php" method="post">
                <div class="form-group">
                    <label for="email">First Name:</label>
                    <input type="text" class="form-control" name="FirstName" id="FirstName" required>
                </div>
                <div class="form-group">
                    <label for="contrasena">Last Name:</label>
                    <input type="password" class="form-control" name="LastName" id="LastName" required>
                </div>
                <button type="submit" class=" mt-4 btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>