<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
        
</body>
</html>

<?php

include 'index.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena  = md5($_POST['contrasena']);

$query  = "INSERT INTO login (nombre, correo, usuario, contrasena)
        VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";

//verificar que el correo no se repita
$verificar_correo = mysqli_query($con, "SELECT * FROM login WHERE correo = '$correo' ");
if(mysqli_num_rows($verificar_correo)>0){
        echo '
                <script>
                        alert("este correo ya esta registrado utiliza otro");
                        window.location="../login.php"
                </script>
        ';
        exit();
}

//verificar que el usuario no se repita
$verificar_usuario = mysqli_query($con, "SELECT * FROM login WHERE usuario = '$usuario' ");
if(mysqli_num_rows($verificar_usuario)>0){
        echo '
                <script>
                        alert("este usuario ya existe pruebe con otro");
                        window.location="../login.php"
                </script>
        ';
        exit();
}

$ejecutar = mysqli_query($con, $query);

if($ejecutar){
        echo'
                <script>
                        alert("usuario registrado correctamente");
                        window.location="../login.php";
                </script>     
        ';
}else{
        echo'
                <script>
                        alert("ah ocurrido un error vuelve a intentarlo");
                        window.location="../login.php";
                </script>     
        ';    
}

mysqli_close($conexion);

?>