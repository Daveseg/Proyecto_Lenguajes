<?php 
    include_once "layout.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <head>
    <title>Servicios</title>
    <?php MostrarHead(); ?>
  <link rel="stylesheet" href="../Views/Assets/css/servicios.css" />

</head>

<body>
<?php 
        MostrarHeader();
    ?>
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://image.winudf.com/v2/image1/Y29tLmFtZXJpY2FuZmxhZy53YWxscGFwZXJzX3NjcmVlbl8wXzE1NjcwMzk5MjhfMDQ2/screen-0.webp?fakeurl=1&type=.webp" class="d-block mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.multiview.ca/wp-content/uploads/2022/02/iStock-1190653824.jpg" class="d-block mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn6.campograndenews.com.br/uploads/noticias/2022/08/19/3aa2eceee2a10df6c33daef6f15aa49cf5035fcf.jpeg" class="d-block mx-auto" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <div class="card-shadow-1">
    <h4>SERVICIOS GENERALES</h4>
    <p>En nuestra empresa, nos especializamos en brindar una amplia gama de servicios para que tu experiencia de viaje sea lo más cómoda
      y satisfactoria posible. A continuación, te presentamos algunos de los servicios que ofrecemos:</p> 
  </div>
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card shadow-sm">
          <img
            src="https://www.larepublica.net/storage/images/2022/07/12/20220712113448.117.jpg"
            class="d-block w-10" alt="nav-imagen" width="100%">
          <div class="card-body">
            <h2 class="card-text">Visa USA</h2>
              <p class="card-text">¿Sueñas con visitar los Estados Unidos? Nosotros te ayudamos a obtener tu visa americana de manera rápida y efectiva. 
                Contamos con un equipo de expertos en trámites de visas que te guiarán a lo largo de todo el proceso. Desde la preparación de la documentación 
                necesaria hasta la asistencia en la entrevista, estamos aquí para asegurarnos de que tu solicitud sea exitosa.</p>
                <br>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="../Views/usa.php" class="btn btn-primary">+ INFORMACIÓN</a>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img
            src="https://marketresearchrecord.com/wp-content/uploads/2023/02/canada-visa-thailand.jpg"
            class="d-block w-10" alt="nav-imagen" width="100%">
          <div class="card-body">
            <h2 class="card-text">Visa Canada</h2>
              <p class="card-text">Si estás planeando un viaje a Canadá, nosotros podemos facilitarte el proceso de obtención de la visa canadiense. 
                Nuestro equipo está actualizado con los requisitos y regulaciones más recientes, y te brindará el apoyo necesario para completar exitosamente tu solicitud. 
                Ya sea para turismo, estudios o trabajo, podemos ayudarte a obtener la visa adecuada para tus necesidades.</p>
                <br>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="canada.php" class="btn btn-primary">+ INFORMACIÓN</a>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img
            src="https://viajescorporativosperu.files.wordpress.com/2018/05/tecnologia-viajes-de-negocios-e1525823347408.jpg"
            class="d-block w-10" alt="nav-imagen" width="100%">
          <div class="card-body">
            <h2 class="card-text">Viajes Personalizados</h2>
              <p class="card-text">Sabemos que cada persona tiene preferencias y necesidades únicas cuando se trata de viajar. 
                Por eso, ofrecemos servicios de personalización de viajes a medida. Si tienes en mente un destino específico, 
                una lista de actividades que te gustaría realizar o cualquier requerimiento especial, nuestro equipo se encargará de diseñar un itinerario 
                personalizado ajustado a tus deseos.</p>
                <br>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="viajes.php" class="btn btn-primary">+ INFORMACIÓN</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
  <?php
    MostrarFooter();

    ?>
  </footer>
</body>

</html>