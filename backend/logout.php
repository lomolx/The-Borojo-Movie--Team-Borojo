<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirige a la página de inicio de sesión o a cualquier otra página
header("Location: ../frontend/index.php");
exit();
?>
