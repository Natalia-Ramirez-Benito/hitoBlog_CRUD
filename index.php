<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hito Programación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <?php
    setcookie('ip', $_SERVER['REMOTE_ADDR']);
    setcookie('date', date('d.m.Y H:i:s'));
  ?>
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
    <div class="card border-dark mb-3" style="padding: 50px;">

      <h1 class="card-title fw-bold text-center">Programación orientada a objetos</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">La programación orientada a objetos es un modelo de programación en el que el diseño de software se organiza alrededor de datos u objetos, en vez de usar funciones y lógica. Se enfoca en los objetos que los programadores necesitan manipular, en lugar de centrarse en la lógica necesaria para esa manipulación. Un objeto se puede definir como un campo de datos con atributos y comportamientos únicos.</p>
      <p class="lh-sm fs-5" style="padding-left: 60px; padding-right: 60px;">Por tanto, la principal característica de este tipo de programación es que soporta objetos, que tienen un tipo o clase asociado. Esas clases pueden heredar atributos de una clase superior o superclase. Por esa razón, este enfoque de programación se utiliza en programas grandes y complejos que se deben actualizar con cierta regularidad.</p>
      
      <h1 class="card-title fw-bold text-center">¿Cuáles son los principales lenguajes de programación orientada a objetos?</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">En la actualidad existen diferentes lenguajes de programación orientada a objetos, como C++, Objective C, Java, Ruby, Visual Basic, Visual C Sharp, Simula, Perl, TypeScript, Smalltalk, PHP o Python. C++ y Java son los dos lenguajes de programación orientada a objetos más usados.</p>
      
      <h1 class="card-title fw-bold text-center">Ventajas de la programación orientada a objetos</h1>
      <ul class="list-group list-group-flush" style="padding-left: 60px; padding-right: 60px;">
        <li class="list-group-item"><strong>Reutilización del código heredado.</strong> Cuando se diseñan correctamente las clases, se pueden usar en distintas partes del programa y en diferentes proyectos. La técnica de herencia ahorra tiempo porque permite crear una clase genérica y luego definir las subclases que heredarán los rasgos de la misma, de manera que no es necesario escribir esas funciones de nuevo. Además, al aplicar un cambio en la clase, todas las subclases lo adoptarán automáticamente.</li>
        <li class="list-group-item"><strong>Mayor modificabilidad.</strong> Otra de las ventajas de la programación orientada a objetos es que permite añadir, modificar o eliminar nuevos objetos o funciones fácilmente para actualizar los programas, lo cual implica un ahorro de tiempo y esfuerzo para los programadores.</li>
        <li class="list-group-item"><strong>Facilidad para detectar errores en el código.</strong> En los lenguajes de programación orientada a objetos no es necesario revisar línea por línea del código para detectar un error. Gracias a la encapsulación los objetos son autónomos, de manera que es más fácil abstraer un problema y saber dónde buscar el error cuando algo no funciona bien.</li>
        <li class="list-group-item"><strong>Modularidad.</strong> Una de las características de la programación orientada a objetos más interesantes es la modularidad ya que así un equipo puede trabajar en múltiples objetos a la vez mientras se minimizan las posibilidades de que un programador duplique la funcionalidad de otro. El trabajo modular también permite dividir los problemas en partes más pequeñas que se pueden probar de manera independiente.</li>
        <li class="list-group-item"><strong>Flexibilidad gracias al polimorfismo.</strong> El polimorfismo de la programación orientada a objetos permite que una sola función pueda cambiar de forma para adaptarse a cualquier clase donde se encuentre. De esta forma se ahorra tiempo de programación y se gana en versatilidad.</li>
      </ul>
    </div>
    <div class="card border-dark mb-3" style="padding: 50px;">

      <h1 class="card-title fw-bold text-center">Programación orientada a eventos</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">La programación orientada a eventos se refiere a un modelo de la programación de computadoras, donde se utilizan los eventos que suceden para la determinación del flujo de control de un programa.</p>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">No es un tipo de tecnología o lenguaje de programación, sino un enfoque que se implementa durante la etapa de desarrollo del producto. Básicamente, separa la lógica de procesamiento de eventos del resto del código de un programa.</p>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Este tipo de programación está diseñado para descubrir eventos mientras van sucediendo, usando un procedimiento apropiado de manejo de eventos para tratarlos, normalmente mediante una llamada a una función o método.</p>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Teóricamente, el estilo de esta programación es compatible con todos los lenguajes de programación, aunque puede ser diferente en la forma de implementarse.</p>
      
      <h1 class="card-title fw-bold text-center">Características de la programación orientada a eventos</h1>
      <h1 class="fs-4 fw-bold" style="padding-left: 60px; padding-right: 60px;">Dependencia de eventos</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">El flujo del programa viene dado por eventos que pueden ser acciones del usuario, mensajes de otros programas, etc., separando la lógica de procesamiento de los eventos del resto del código de un programa, contrastando así con el procesamiento por lotes.</p>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Los eventos en sí pueden ser desde aceptar o rechazar una solicitud de préstamo, denominado evento de alto nivel, hasta que un usuario presione una tecla, que es un evento de bajo nivel.</p>
      
      <h1 class="fs-4 fw-bold" style="padding-left: 60px; padding-right: 60px;">Orientada al servicio</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Se utiliza para escribir programas diseñados para el servicio sin ralentizar la computadora, ya que la orientación al servicio solo consume poco poder de procesamiento. Además, los servicios se ejecutan por lo general en el trasfondo del sistema operativo.</p>
      
      <h1 class="fs-4 fw-bold" style="padding-left: 60px; padding-right: 60px;">Eventos</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Es una condición que surge durante la ejecución de un programa y que requiere alguna acción por parte del sistema. Cada evento es diferente por naturaleza, algunos requieren que el programa recobre y muestre cierta información, y otros que se inicien algunos cálculos y cambios de estado.</p>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Los eventos incluyen al mouse, al teclado, una interfaz de usuario y las acciones que se deben activar en el programa cuando ocurran. Esto significa que el usuario debe interactuar con un objeto en el programa, como hacer clic en un botón del mouse, usar el teclado para seleccionar un botón, etc.</p>

      <h1 class="fs-4 fw-bold" style="padding-left: 60px; padding-right: 60px;">Controlador de eventos</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Es una determinada unidad del programa que se activa para reaccionar ante un evento. Es decir, es un tipo de función o método que ejecuta una acción específica cuando se activa un evento determinado.</p>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Por ejemplo, podría ser un botón que cuando el usuario haga clic en él muestre un mensaje y cuando vuelva a hacer clic en ese botón cierre el mensaje.</p>

      <h1 class="fs-4 fw-bold" style="padding-left: 60px; padding-right: 60px;">Funciones de activación</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Son funciones que deciden qué código ejecutar cuando se produce un evento específico. Se utilizan para seleccionar qué controlador de eventos emplear al producirse un evento.</p>
      
      <h1 class="fs-4 fw-bold" style="padding-left: 60px; padding-right: 60px;">Tiempo controlado</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Es un código específico que se ejecuta en un momento determinado. Esto significa que es una tarea preestablecida por hacer.</p>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">La actualización de Windows es un ejemplo de tiempo controlado, donde el usuario puede establecer cuándo actualizar o cuándo verificar y descargar la actualización.</p>
      
      <h1 class="card-title fw-bold text-center">Lenguajes de programación orientada a eventos</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Algunos lenguajes de programación orientada a eventos incluyen JavaScript, C#, Visual Basic y Objective-C.</p>
    
    </div>
    <div class="card border-dark mb-3" style="padding: 50px;">
      
      <h1 class="card-title fw-bold text-center">Programación procedimentales</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Los lenguajes de programación imperativos son aquellos que se basan en una estructura secuencial y jerárquica, y que ejecutan acciones de acuerdo con reglas precisas. Deben su nombre a que son lenguajes que indican a los ordenadores qué tienen que hacer y cómo deben hacerlo. </p>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Los lenguajes procedimentales pertenecen a este grupo y están diseñados para dar instrucciones precisas a los sistemas sobre cómo deben comportarse ante ciertos estímulos o valores de entrada. Con este lenguaje se pueden construir herramientas digitales que procesen valores de entrada para aplicar ciertas reglas y arrojar valores de salida; siempre y cuando cumplan con los requisitos del sistema.</p>
      
      <h1 class="card-title fw-bold text-center">¿Por qué estos lenguajes son populares?</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Los lenguajes de programación procedimentales son bastante útiles para proyectos en los que el sistema debe comportarse de un modo específico de forma constante.</p>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Debido a que las instrucciones son explícitas y claras, el ordenador debe cumplir con ellas de forma ordenada y el programador tiene la responsabilidad de estructurar el código de forma puntual. A pesar de que esto puede parecer una desventaja, en realidad le da completo control al diseñador respecto al funcionamiento del sistema.</p>
      
      <h1 class="card-title fw-bold text-center">Lenguajes de programación procedimental</h1>
      <p class="lh-base fs-5" style="padding-left: 60px; padding-right: 60px;">Los lenguajes de programación procedimental más populares son C, Basic, Pascal</p>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
