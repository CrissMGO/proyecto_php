<?php

require '../../controller/Articulos.php';

session_start();
$correo = $_SESSION['correo'];

if (!isset($correo)) {
  header('location:../login/login.php');
  exit;
}
# code...

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">






</head>

<style>
  .carousel-image {
    max-height: 400px;
    /* Ajusta la altura máxima según tus necesidades */
    object-fit: cover;
    /* Ajusta la forma en que la imagen se adapta al contenedor */
  }
</style>

<body>
  <?php
  include '../components/navbar.php';

  ?>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="../../assets/img/herramientas.jpg" class="d-block w-100 carousel-image" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="../../assets/img/fondouno.jpg" class="d-block w-100 carousel-image" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../../assets/img/segunda2.jpg" class="d-block w-100 carousel-image" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <br><br>
  <center>
    <h1 style="color: #2980B9;">Bienvenido a tu tienda online de herramientas</h1>
  </center>
  <br>

  <div class="card w-50">
    <div class="card-body">

      <h4>
        En nuestra plataforma, puedes registrar tus artículos y ponerlos a la venta en nuestra página principal.
        ¿Tienes productos únicos que deseas compartir con el mundo? ¡Este es el lugar perfecto para hacerlo!
      </h4>

    </div>
  </div>
<br><br>





  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
</body>

</html>