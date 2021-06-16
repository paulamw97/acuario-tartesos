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
  <div class="container">

    <form method="post" action="../carrito.php">

      <div class="row">
        <?php
        // var_dump($results);

         
        for ($i = 0; $i < count($results); $i++) {
          $pez = $results[$i];

        ?>
         
         <div class="col-3">
            <div class="card"  >
              <img src="<?php echo '../assets/media/peces/' . $pez['foto']; ?> " class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title   ">Stock: (<b><?php echo $pez['scotck']; ?></b>/uds.)</h5>
                <h5 class="card-title   ">Precio: (<b><?php echo $pez['precio']; ?></b>€)</h5>
                <input  type="number" class="form-control"  name="id-<?php echo $pez['id']; ?>" min="1" max="<?php echo $pez['scotck']; ?>">
                
              </div>
            </div>
          </div>


        <?php
        }
        ?>
      

      </div>
      <br>
      <br>
      <button class="btn btn-success" type="submit">Añadir al carrito</button>
      <br>
      <br>
      <br>
    </form>
  </div>


  <?php include '../include/footer.php'; ?>

</body>


</html>