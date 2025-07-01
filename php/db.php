<?php
// db.php - Conexión a la base de datos usando PDO

// Datos para conexión - cambiar según hosting o configuración local
$host = 'localhost';
$dbname = 'agenda_contactos';
$user = 'tu_usuario';
$pass = 'tu_contraseña';

try {
    // Crear instancia PDO con charset utf8mb4 para evitar problemas con caracteres especiales
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);

    // Configurar PDO para lanzar excepciones en errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // En caso de error, mostrar mensaje para desarrollo (en producción debería ser más discreto)
    die("Error en la conexión a la base de datos: " . $e->getMessage());
}
?>
