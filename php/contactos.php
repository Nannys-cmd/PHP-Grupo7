<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: ../index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <title>Mis Contactos</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <h2>Agenda de Contactos de <?php echo htmlspecialchars($_SESSION['usuario']); ?></h2>

  <table border="1" cellpadding="8" cellspacing="0">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-label="Nombre">Juan Pérez</td>
        <td data-label="Teléfono">12345678</td>
        <td data-label="Email">juan@mail.com</td>
        <td data-label="Acciones">
          <a href="#">Editar</a> | <a href="#">Eliminar</a>
        </td>
      </tr>
      <tr>
        <td data-label="Nombre">María Gómez</td>
        <td data-label="Teléfono">87654321</td>
        <td data-label="Email">maria@mail.com</td>
        <td data-label="Acciones">
          <a href="#">Editar</a> | <a href="#">Eliminar</a>
        </td>
      </tr>
    </tbody>

  </table>

  <p><a href="../dashboard.php">⬅ Volver al panel</a></p>
</body>

</html>