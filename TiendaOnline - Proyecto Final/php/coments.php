<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){

    $Name = $_POST['nombre'];
    $Mail = $_POST['mail'];
    $Comment = $_POST['comment'];

    $sql = "INSERT INTO comentario (Nombre, Correo, Comentario) VALUES ('$Name','$Mail','$Comment')";
    $result = mysqli_query($conn,$sql);
    echo $result;
}
mysqli_close($conn);

?>