<?php 
if($_SERVER["REQUEST_METHOD"]== "POST"){

    $user = $_POST['User'];
    $password = $_POST['Password'];

    $sql = "SELECT * FROM users WHERE user = '$user' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        header("Location: index.php");
        exit();
    }
    else
    {
        echo "Usuario o contraseña invalidos";
    }

}
mysqli_close($conn);

?>