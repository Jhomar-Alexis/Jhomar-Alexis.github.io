<?php

session_start();

include 'index.php';

$correo = $_POST['correo'];
$contrasena = md5($_POST['contrasena']);

$validar_datos = mysqli_query($con, "SELECT * FROM login WHERE correo='$correo' 
and contrasena='$contrasena'");

if(mysqli_num_rows($validar_datos)>0){
    $_SESSION['usuario'] = $correo;
    header("location: ../bienvenido.php");
    exit;
}else{
    echo '
        <script>
            alert("este usuario no existe, por favor sus datos");
            window.location = "../login.php";
        </script>
    ';
    exit;
}

?>