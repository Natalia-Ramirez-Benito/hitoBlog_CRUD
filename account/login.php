<?php

session_start(); // Inicia la sesión

if($_SERVER['REQUEST_METHOD'] === 'POST') { // Verifica si el formulario fue enviado

    // Conecta a la base de datos
    $conn = new PDO('mysql:host=localhost;dbname=hito', 'root', '');

    // Obtiene los datos del formulario
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // Verifica las credenciales del usuario
    $stmt = $conn->prepare('SELECT email,contrasena FROM users WHERE email=? AND contrasena=?');
    //var_dump('SELECT * FROM users WHERE email=:email AND contrasena=:contrasena');
    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $contrasena);

    $stmt->execute();
    $filas = $stmt ->rowCount();

    $sql=("SELECT id FROM users WHERE email='".$email."'");
    $resultado=$conn->query($sql);
    $row=$resultado->fetch();

    if ($filas > 0) {
        $_SESSION['token']=$row['id'];
        header("Location: ../index.php");
    } else{
        echo("Error al introducir el correo o la contraseña");
        header( "refresh:5; url=login.html" );
    }

}
