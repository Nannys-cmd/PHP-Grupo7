<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Login - Agenda de Contactos</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <h1>Login</h1>
    <form action="php/login.php" method="post">
        <label>Email: <input type="email" name="email" required /></label><br/>
        <label>Contraseña: <input type="password" name="password" required /></label><br/>
        <button type="submit">Ingresar</button>
    </form>
    <?php if (isset($error)): ?>
        <p style="color:red;"><?= htmlspecialchars($error); ?></p>
    <?php endif; ?>
</body>
</html>
