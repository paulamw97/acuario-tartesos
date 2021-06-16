<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">

  <title>trabajo Final trimestre</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
 <!-- Bootstrap JS -->
 

<LINK REL="stylesheet" TYPE="text/css" HREF="assets/css/estiloC.css"> 
<LINK REL="stylesheet" TYPE="text/css" HREF="assets/css/estilo.css"> 
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header>
    <img id="logo" src="assets/media/logo.png">
    <h1>Acuario Tartesos</h1>
  </header>

  <?php include 'include/header.php'; ?>

  <form action="/my-handling-form-page" method="post">
    <ul>
      <li>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="user_name">
      </li>
      <li>
        <label for="mail">Correo electrónico:</label>
        <input type="email" id="mail" name="user_mail">
      </li>
      <li>
        <label for="msg">Mensaje:</label>
        <textarea id="msg" name="user_message"></textarea>
      </li>
      <li class="button">
      <a class="btn btn-success" href="include/pagina.html">Enviar</a>
      </li>
    </ul>

  </form>
  <div id="mapa">
    <h1>Si prefiere acudir a nuestro negocio, esta es la dirección</h1>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12597.203164005154!2d-4.7877805!3d37.8766478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca155b9cd2486481!2sAcuario%20Tartesos!5e0!3m2!1ses!2ses!4v1617552581366!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
      width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
      tabindex="0"></iframe>>

  </div>

</body>
<?php include 'include/footer.php'; ?>

</html>