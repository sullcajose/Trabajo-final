<?php
session_start();
if (!isset($_SESSION['usuarios']) || $_SESSION['rol'] !== 'alumno') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área Alumno</title>
</head>
<body>
    <h3>Bienvenido alumno: <?php echo htmlspecialchars($_SESSION['usuario']); ?></h3>
    <a href="php/cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>
