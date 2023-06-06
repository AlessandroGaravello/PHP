<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
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
    <?php
    if(isset($_POST['dato'])){
      $email = $_POST['email'];
      $contrasena= $_POST['contraseña'];
      $contrasena2= $_POST['contraseña2'];
      $titulo = $_POST['titulo'];
      $contenido = $_POST['contenido'];
      $imagen = $_POST['imagen'];
      if ($contrasena==$contrasena2){
        $conn=new PDO("mysql:host=localhost:3306;dbname=hito","root","");  
        // Preparar la sentencia INSERT
        $stmt = $conn->prepare('INSERT INTO formulario (email, pass1, pass2, titulo, contenido, fecha, imagen) VALUES (?, ?, ?, ?, ?, now(), ?)');
        // Ejecutar la sentencia INSERT
        $stmt->execute([$email, $contrasena, $contrasena2, $titulo, $contenido, $imagen]);
        echo("<p style='color: green;'>".$email." Su blog ha sido guardado</p>");
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          session_start();
          $_SESSION['token'] = true;
          exit;
        } 
        else {
            $error = 'Credenciales inválidas';
        }
        } 
    }  
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>