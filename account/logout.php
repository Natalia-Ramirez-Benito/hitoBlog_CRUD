<?php
session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir al usuario a otra página
header('Location: ../index.php');
exit();
?>
