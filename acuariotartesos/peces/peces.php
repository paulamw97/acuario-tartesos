<?php include '../include/session.php'; ?>

<?php 
require '../include/database.php';


$records = $conn->prepare('SELECT * FROM peces WHERE tipo = :tipo');
$records->bindParam(':tipo', $_GET['tipo']);

$records->execute();
$results =   $records->fetchAll();




?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  
  <?php include '../include/head.php'; ?>
  
  <title>Acuario Tartesos</title>
</head>

<body>
  <header>
    <img id="logo" src="../assets/media/logo.png">
    <h1>Acuario Tartesos</h1>

  </header>

  <?php include '../include/header.php'; ?>

  <div class="container gallery-container">
    <h1>¿Cual buscas? </h1>
    <div class="tz-gallery">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <h2>Peces tropicales</h2>
          <a class="lightbox" href="pez.php?tipo=1">
            <img src="../assets/media/tropical.jpg" alt="Park">
          </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <h2>Peces de agua fría</h2>
          <a class="lightbox" href="pez.php?tipo=2">
            <img src="../assets/media/aguaFria.jpg" alt="Bridge">
          </a>
        </div>
        <div class="col-sm-12 col-md-4">
          <h2>Peces marinos</h2>
          <a class="lightbox" href="pez.php?tipo=3">
            <img src="../assets/media/marino.jpg" alt="Tunnel">
          </a>
        </div>
      </div>
    </div>
  </div>


  <?php include '../include/footer.php'; ?>

</body>


</html>