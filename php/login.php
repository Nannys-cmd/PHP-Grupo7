<?php
session_start();
require_once 'db.php'; // incluir conexión PDO

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener y sanitizar entradas
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password']; // No se filtra porque el hash es el que importa

    if (!$email || !$password) {
        $error = "Por favor, ingresa un email y contraseña válidos.";
    } else {
        // Preparar consulta para buscar usuario
        $stmt = $pdo->prepare("SELECT id, nombre, password FROM usuarios WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($password, $usuario['password'])) {
            // Login exitoso: crear variables de sesión
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_name'] = $usuario['nombre'];
            header('Location: ../dashboard.php'); // Redirigir a dashboard
            exit();
        } else {
            $error = "Email o contraseña incorrectos.";
        }
    }
}
?>
<!-- Aquí va el HTML del formulario de login, con mensaje de error si existe -->
