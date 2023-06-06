<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
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
  <div class="container">
    <?php
    $conn=new PDO("mysql:host=localhost:3306;dbname=hito","root","");
    // Ejecutar la consulta SQL y obtener los resultados
    $sql = "SELECT titulo, contenido, fecha, imagen FROM formulario";
    $resultado = $conn->query($sql);

    // Mostrar los resultados en una tabla
    if ($resultado->rowCount() > 0) {
    echo "<table>";
    echo "<tr><th>Título</th><th>Imagen</th><th>Contenido</th><th>Fecha</th></tr>";
    foreach ($resultado as $fila) {
      echo "<tr><td>" . $fila["titulo"] . "</td><td><img src='" . $fila["imagen"] . "'></td><td>" . $fila["contenido"] . "</td><td>" . $fila["fecha"] . "</td></tr>";
    }
    }
    echo "</table>";
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>