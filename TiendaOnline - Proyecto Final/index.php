<?php
include 'php/conection.php';
include 'php/products.php';
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
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
        .Total {
            position: relative;
            color: white;
            left: 600px;
            top: 8px;
        }
        img{
            width: 300px;
            height: 320px;
            transform: scale(0.9);
        }
    </style>
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
                    <a class="nav-link active" href="index.php">Inicio</a>
                </li>
            </ul>
            <ul class="Total">
                <li class="nav-item">
                    <a class="nav-link" href="./factura.php">Total: $ <?php echo number_format($_SESSION['total'], 2); ?></a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="./factura.php">Carrito( <?php echo $_SESSION['contador']; ?> )</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="row justify-content-center">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-sm-4">';
                echo '<div class="card" style="width: 400px">';
                echo '<div class="card-body">';
                echo '<img class="card-img" src="' . $row["Imagen_Producto"] . '">';
                echo '<h4 class="card-tittle">' . $row["Nombre_Producto"] . '</h4>';
                echo '<p class="card-text">' . $row["Desc_Producto"] . '</p>';
                echo '<p class="card-text">' . $row["Precio_Producto"] . '</p>';
                echo '<a class="btn btn-primary" href="php/agregar_al_carrito.php?precio=' . $row["Precio_Producto"] . '" >Agregar al Carrito</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No se encontraron productos";
        }
        ?>
    </div>
    <footer class="footer fixed-bottom bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center">
                    <a href="tel:+123456789" class="text-white mx-3">Teléfono: +123 456 789</a>
                    <a href="mailto:acarolinajimenez@ucompensar.co" class="text-white mx-3">Correo: acarolinajimenez@ucompensar.co</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>