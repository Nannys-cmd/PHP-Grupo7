<?php
session_start();
include 'db.php';

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: ../dashboard.php");
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>
