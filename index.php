<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">    
<head>
    <meta charset="UTF-8">
    <title>Login - Agenda de Contactos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="php/login.php">
        <input type="text" name="usuario" placeholder="Usuario" required><br>
        <input type="password" name="clave" placeholder="Contraseña" required><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>