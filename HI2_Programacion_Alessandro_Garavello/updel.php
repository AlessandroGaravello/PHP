<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <?php
    session_start();
    if(isset($_SESSION['token']))
    {
        echo("<h2>Zona privado</h2>");
    }
    else{
        header('location:registro.php');
    }
  ?>
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
  <h2>Actualizar</h2>
  <form method="post" enctype="multipart/form-data">
    <label for="email">Email del autor:</label>
    <input type="email" id="email" name="email" required>
    <br>

    <label for="email">Contraseña:</label>
    <input type="password" id="password" name="contraseña" required>
    <br>

    <label for="email">Confirma contraseña:</label>
    <input type="password" id="password" name="contraseña2" required>
    <br>
    
    <label for="titulo">Título (máximo 30 caracteres):</label>
    <input type="text" id="titulo" name="titulo" maxlength="30" required>
    <br>
    
    <label for="contenido">Contenido (máximo 300 caracteres):</label>
    <textarea id="contenido" name="contenido" rows="5" cols="30" maxlength="300" required></textarea>
    <br>
    
    <label for="imagen">URL de la imagen:</label>
    <input type="text" id="imagen" name="imagen" accept="image/*">
    <br>
    
    <input type="submit" value="Enviar" name="dato">
    </form>
    <h2>Borrar</h2>
  <form method="post" enctype="multipart/form-data">
    <label for="email">Email del autor:</label>
    <input type="email" id="email" name="email" required>
    <br>

    <label for="email">Contraseña:</label>
    <input type="password" id="password" name="contraseña" required>
    <br>

    <label for="email">Confirma contraseña:</label>
    <input type="password" id="password" name="contraseña2" required>
    <br>
    
    <label for="titulo">Título (máximo 30 caracteres):</label>
    <input type="text" id="titulo" name="titulo" maxlength="30" required>
    <br>
    
    <label for="contenido">Contenido (máximo 300 caracteres):</label>
    <textarea id="contenido" name="contenido" rows="5" cols="30" maxlength="300" required></textarea>
    <br>
    
    <label for="imagen">URL de la imagen:</label>
    <input type="text" id="imagen" name="imagen" accept="image/*">
    <br>
    
    <input type="submit" value="Enviar" name="dato">
    </form>
    <h2>Log out</h2>
    <form action="logout.php" method="post">
        <button type="submit">Cerrar sesión</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>