<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<h2>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h2>
<a href="php/logout.php">Cerrar sesión</a>
