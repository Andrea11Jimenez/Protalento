<?php
session_start();
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}
if (!isset($_SESSION['total'])) {
    $_SESSION['total'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Catalogo Online</title>
    <!-- UTF-8 es para reconocer carácteres especiales-->
    <meta charset="UTF-8">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="comentarios.php">Contactenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Inicio</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrito( <?php echo $_SESSION['contador']; ?> )</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="row justify-content-center">
    <div class="col-sm-4">
            <div class="card" style="width: 500px;">
                <div class="card-header bg-primary">
                    <h5 class="card-tittle text-white">
                        Inicio de Sesión
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="mb-3">
                            <label for="User" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="User" placeholder="Ingrese su Usuario">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="Password" placeholder="Ingrese su Contraseña">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <footer class="footer fixed-bottom bg-dark">
        <div class="container">
            <div class="row">
                <div class="col text-center text-white">
                    <p>Este es mi pie de página</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>