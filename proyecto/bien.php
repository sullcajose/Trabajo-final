<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("por favor deve iniciar secion");
    window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola bienvenido</h1>
    <a href="php/cerrar_sesion.php">cerrar</a>
</body>
</html>