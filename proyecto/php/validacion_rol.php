<?php
session_start();
include("conexion.php");  // Debe definir $conexion (mysqli)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT u.usuario, u.contrasena, r.nombre AS rol
            FROM usuarios u
            JOIN rol r ON u.id_rol = r.id
            WHERE u.correo = ?";

    if ($stmt = $conexion->prepare($sql)) {
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 1) {
            $datos = $resultado->fetch_assoc();

            if (password_verify($contrasena, $datos['contrasena'])) {
                $_SESSION['usuario'] = $datos['usuario'];  // corregido nombre variable
                $_SESSION['rol'] = $datos['rol'];

                switch ($datos['rol']) {
                    case 'alumno':
                        header("Location: ../alumno.php");
                        break;
                    case 'docente':
                        header("Location: ../docente.php");
                        break;
                    case 'administrador':
                        header("Location: ../admin.php");
                        break;
                    case 'admin_general':
                        header("Location: ../admin_general.php");
                        break;
                    default:
                        echo "Rol desconocido.";
                        exit();
                }
                exit();

            } else {
                echo '<script>alert("Contraseña incorrecta."); window.location="../index.php";</script>';
                exit();
            }
        } else {
            echo '<script>alert("Correo no encontrado."); window.location="../index.php";</script>';
            exit();
        }
        $stmt->close();
    } else {
        echo "Error en la consulta.";
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>
