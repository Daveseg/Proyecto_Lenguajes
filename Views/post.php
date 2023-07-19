<!DOCTYPE html>
<html>
<head>
  <title>Crear un nuevo post</title>
  <meta charset="UTF-8">
  <title>Crear Post</title>
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Proyecto_Lenguajes/Views/Assets/css/post.css">
  <link rel="stylesheet" href="http://localhost/Proyecto_Lenguajes/Views/Assets/css/servicios.css">

</head>
<body>
  <nav>
    <div class="nav-container">
      <div class="main-info-container">
        <img class="logo-img" src="../Views/Assets/imgs/logo.png" alt="" />
      </div>
      <div class="data-container">
        <div class="servicios">
          <a class="nav-link Dropdown" aria-current="page" href="../Views/servicios.html">
            <h5>SERVICIOS</h5>
          </a>
        </div>
        <div class="servicios">
          <a class="nav-link Dropdown" aria-current="page" href="../Views/home.html">
          <h5>PAQUETES DE VIAJE</h5>
        </a>
        </div>
        <div class="servicios">
          <a class="nav-link Dropdown" aria-current="page" href="../Views/blog.html">
            <h5>BLOG</h5>
          </a>
        </div>
        <div class="servicios">   
          <a class="nav-link Dropdown" aria-current="page" href="../Views/Buscador.html">
          <h5>BUSCADOR VUELOS</h5>
        </a>
        </div>
      </div>
    </div>
  </nav>
  <div class="admin-wrapper">
    <!-- izquierda-->
    <div class="left-sidebar">
        <ul>
            <li><a href="../Views/blog.html">Ver Blog</a></li>
            <li><a href="../Views/adminblog.html">Administrar Post</a></li>
        </ul>
    </div>
  
  <!-- derecha-->
  <div class="admin-content">
    <div class= "content">
        <div class="post-form-container"></div>
        <h1>Crear nuevo post</h1>
        <form>
          <label for="titulo">Título:</label>
          <input type="text" id="titulo" name="titulo" placeholder="Ingrese el título del post" required> <br>

          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" placeholder="Ingrese el mensaje del post" required></textarea><br>

          <label for="imagen">Imagen:</label>
          <label for="imagen" class="custom-file-upload my-custom-class">Seleccionar imagen</label><br>
          <input type="file" id="imagen" name="imagen">


          <label for="lugar">Destino:</label>
          <input type="text" id="lugar" name="lugar" placeholder="Ingrese el lugar" required><br>

          <input type="submit" id="btnpublicar" name="btnpublicar" value="Guardar"><br>
          <input type="hidden" name="m" value="guardar">
        </form>
      </div>
    </div>
  </div>
  </body>
</html>