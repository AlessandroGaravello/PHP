<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Hito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.php">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log out</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contenido.php">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="updel.php">Actualizar/Eliminar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h2>lenguajes de programación</h2>
  
  <div><p>Los lenguajes de programación orientada a objetos (OOP) se basan en la idea de que todo en un programa es un objeto y tiene atributos y métodos. 
    Los objetos interactúan entre sí a través de mensajes y pueden heredar características de otros objetos. 
    Ejemplos de lenguajes OOP incluyen Java, Python y C++.</p></div>

  <div><p>Los lenguajes de programación basados en eventos se centran en la programación reactiva, en la que las acciones son disparadas por eventos que ocurren en lugar de una secuencia de instrucciones lineales. 
    Los eventos pueden ser acciones del usuario, como hacer clic en un botón, o eventos del sistema, como recibir datos de una fuente externa. 
    Ejemplos de lenguajes basados en eventos incluyen JavaScript y Python.</p></div>

  <div><p>Los lenguajes procedimentales se basan en la idea de que un programa es una serie de instrucciones que se ejecutan una tras otra. 
    Estas instrucciones pueden ser agrupadas en funciones que realizan tareas específicas. 
    Ejemplos de lenguajes procedimentales incluyen C, Fortran y BASIC.</p></div>

  <div><p>Es importante tener en cuenta que estos tres tipos de lenguajes de programación no son mutuamente excluyentes y, de hecho, muchos lenguajes combinan características de cada uno. 
    Por ejemplo, Python es un lenguaje OOP que también admite programación basada en eventos. 
    La elección del lenguaje de programación adecuado dependerá del proyecto en cuestión y de las necesidades específicas del desarrollador.</p></div>
    <?php
      // Obtenemos la dirección IP del equipo que accede a la página
      $ip = $_SERVER['REMOTE_ADDR'];

      // Obtenemos la fecha actual
      $fecha = date('d/m/Y H:i:s');

      // Creamos la cookie con la dirección IP y la fecha de acceso
      setcookie('miCookie', "IP: $ip, Fecha de acceso: $fecha", time()+3600); // La cookie expirará en una hora
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>