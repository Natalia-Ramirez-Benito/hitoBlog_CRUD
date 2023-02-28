<?php
    // Conectar a la base de datos
    $conn = new PDO('mysql:host=localhost;dbname=hito', 'root', '');

    // Preparar la sentencia SQL
    $stmt = $conn->prepare("INSERT INTO posts (email, titulo, contenido, fecha_publicacion, imagen) VALUES (?, ?, ?, ?, ?)");

    // Asignar los valores del formulario a las variables
    $email = $_POST['email'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $fecha_publicacion = $_POST['fecha_publicacion'];
    $imagen = $_POST['imagen'];

    // Ejecutar la sentencia SQL
    $stmt->execute([$email, $titulo, $contenido, $fecha_publicacion, $imagen]);

    // Confirmar al autor el correcto funcionamiento de la tarea
    echo "<p>El post se ha guardado correctamente.</p>";
    echo "<p>Rediriguiendo a Publicar Post...</p>";
    header( "refresh:5; url=publicarPost.html" );
?>