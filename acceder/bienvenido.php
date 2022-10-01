<?php

session_start();
if(!isset($_SESSION['usuario'])){
    echo '
        <script>
            alert("Inicia Sesion para Ingresar a la pagina");
        </script> 
        window.location="login.php";
    ';
    session_destroy();
    die();
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bienvenido.css">
    <title>BIENVENIDO - JHOMAR CHERO</title>
</head>
<body>
    <h1 class="title">Bienvenido a mi pagina</h1>

    <div class="comunicado">
       <p>Lo siento la pagina aun no esta terminada
           apenas la termine te enviare un correo 
           notificando que todo esta listo y ya puedes
           ingresar a ver que es lo que e diseñado,
           tambien puedes ir a dejarme un correo diciendome
           sobre que te gustaria que sea la pagina web
           eso me ayudaria mucho en el desarrollo de este
           proyecto web !espero tu SMS¡. 
           <br><br>
           !gracias por visitar mi pagina¡
           <br><br>
           " Jhomar Alexis Chero Sosa "
       </p> 
    </div>

    <div class="button">
        <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
    </div>
</body>
</html>