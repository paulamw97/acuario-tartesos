<?php include 'include/session.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.JS -->
  <!-- Bootstrap JS -->


  <LINK REL="stylesheet" TYPE="text/css" HREF="assets/css/slider.css">
  <LINK REL="stylesheet" TYPE="text/css" HREF="assets/css/estilo.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Acuario Tartesos</title>
</head>

<body>
  <header>
    <img id="logo" src="assets/media/logo.png">
    <h1>Acuario Tartesos</h1>
  </header>

  <?php include 'include/header.php'; ?>
  <div class="acutex">
    <h2>Los mejores acuarios del mes</h2>
    <p>¿Quieres que tu acuario también salga? Mándanos una foto</p>
  </div>

  <?php include 'include/slider.php'; ?>

  <div>
    <a href="https://best.aliexpress.com/" target="_blank"><img class="publi1" src="assets/media/ali.jpg"></a>
  </div>
  <div>
    <a href="https://www2.hm.com/es_es/index.html" target="_blank"><img class="publi2" src="assets/media/hym.jpg"></a>
  </div>
  <div>
    <h1>Sobre nosotros</h1>
    <h3>Nuestra tienda</h3>
    <table>
      <tr>
        <td><img class="timg" src="assets/media/tienda1.jpg"></td>
        <td ><img class="horario" src="assets/media/horario.jpg"></td>
      </tr>
    </table>

  </div>
  
  

  <script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/f39013e4ea504736b45f1a883b18c9d43cddb82d25084e518ab873d6e9f83c5e.js"></script>

  <?php include 'include/footer.php'; ?>

</body>


</html>