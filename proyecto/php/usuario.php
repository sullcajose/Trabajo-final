<?php
include 'conexion.php';

// Obtener datos del formulario
$nombre = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$id_rol = $_POST['id_rol']; // 👈 Agregado

// Validar campos requeridos
if (empty($nombre) || empty($correo) || empty($usuario) || empty($contrasena) || empty($id_rol)) {
    echo '
    <script>
        alert("Todos los campos son obligatorios");
        window.location = "../index.php";
    </script>';
    exit();
}

// Validar si el correo ya existe
$correo_el = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($correo_el) > 0) {
    echo '
    <script>
        alert("El correo ya está registrado");
        window.location = "../index.php";
    </script>';
    exit();
}

// Validar si el usuario ya existe
$usu = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
if (mysqli_num_rows($usu) > 0) {
    echo '
    <script>
        alert("El nombre de usuario ya está registrado");
        window.location = "../index.php";
    </script>';
    exit();
}

// Cifrar la contraseña
$contrasena_segura = password_hash($contrasena, PASSWORD_DEFAULT);

// Insertar usuario en la base de datos
$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena, id_rol)
          VALUES ('$nombre', '$correo', '$usuario', '$contrasena_segura', '$id_rol')";

$ejecutor = mysqli_query($conexion, $query);

if ($ejecutor) {
    echo '
    <script>
        alert("Usuario registrado exitosamente");
        window.location = "../index.php";
    </script>';
} else {
    echo '
    <script>
        alert("Hubo un error al registrar el usuario");
        window.location = "../index.php";
    </script>';
}
?>
