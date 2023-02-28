<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hito Programación</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="publicarPost.html">Publicar Post</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="posts.php">Todos los posts</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="misposts.php">Mis posts</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Cuenta
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="account/login.html">Inicio sesión</a></li>
                    <li><a class="dropdown-item" href="account/createacc.html">Crear cuenta</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="account/logout.php">Cerrar sesión</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
        <?php
        session_start();
        if(isset( $_SESSION['token'])){
                // Conectar a la base de datos
                $conn = new PDO('mysql:host=localhost;dbname=hito', 'root', '');

                // Preparar la sentencia SQL
                $sql = ("SELECT * FROM posts WHERE id=".$_SESSION['token']."");
                $query = $conn -> prepare($sql);
                $query->execute();
                $results = $query -> fetchAll(PDO::FETCH_OBJ);
                if($query -> rowCount() > 0) { 

                    // Usaremos el ciclo para mostrar resultados
                    foreach($results as $result) {
                    echo "<div class='card'>";

                    echo "<h5 class='card-title'>".$result ->titulo."</h5>";
                    echo "<p class='card-text>".$result -> email."</p>";
                    echo "<p class='card-text'>".$result ->contenido."</p>";
                    echo "<p class='card-text'>".$result ->fecha_publicacion."</p>";
                    echo "<img src='".$result ->imagen."'></img>";
                    echo "</div>";
                    
                } 
                    
            }
        } else{
            header('Location: account/login.html');
        }
        ?>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>