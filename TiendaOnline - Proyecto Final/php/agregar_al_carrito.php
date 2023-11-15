<?php
session_start();

// Verificar si se ha proporcionado un precio válido en la URL
if (isset($_GET['precio']) && is_numeric($_GET['precio'])) {
    $precio = floatval($_GET['precio']);

    // Incrementar el contador y sumar el precio al total
    $_SESSION['contador']++;
    $_SESSION['total'] += $precio;
}

// Redirigir de vuelta a la página anterior
header('Location: ' . dirname($_SERVER['PHP_SELF']) . '/../index.php');
exit();
?>
