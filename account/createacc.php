<?php
    // Iniciar sesión
    session_start();

    // Conectarse a la base de datos
    $conn = new PDO('mysql:host=localhost;dbname=hito', 'root', '');

    // Recoger los datos del formulario
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $fecha_nacmiento = $_POST['fecha_nacimiento'];
    $imagen = $_POST['imagen'];


    // Insertar los datos en la base de datos
    $stmt = $conn->prepare("INSERT INTO users (email, contrasena, fecha_nacimiento, imagen) VALUES (?, ?, ?, ?)");
    $stmt->execute([$email, $contrasena, $fecha_nacmiento, $imagen]);

    // Almacenar el nombre del usuario en una variable de sesión
    $_SESSION['email'] = $email;

    // Redirigir al usuario a otra página
    header('Location: ../index.php');
?>