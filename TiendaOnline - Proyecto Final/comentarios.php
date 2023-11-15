<?php
include 'php/conection.php';
include 'php/coments.php';

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
          <a class="nav-link active" href="#">Contactenos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Iniciar Sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <div class="row justify-content-center">
    <div class="col-sm-4">
      <div class="card" style="width: 500px;">
        <div class="card-header bg-primary">
          <div class="text-center">
            <h5 class="card-title text-white"> Deja un Comentario </h5>
          </div>
        </div>
        <div class="card-body">
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Ingresa Tu Nombre">
            </div>
            <div class="mb-3">
              <label for="Correo" class="form-label">Correo</label>
              <input type="mail" class="form-control" name="mail" placeholder="Correo">
            </div>
            <div class="mb-3">
              <label for="comment" class="form-label">Comentario</label>
              <textarea class="form-control" name="comment" rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer fixed-bottom bg-dark">
    <div class="container">
      <div class="row align-items-center">
        <div class="text-center">
          <a href="tel:+123456789" class="text-white mx-3">Teléfono: +123 456 789</a>
          <a href="mailto:jandreacarolina@gmail.com" class="text-white mx-3">Correo: jandreacarolina@gmail.com</a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>