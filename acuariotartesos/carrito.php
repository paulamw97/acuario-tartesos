<?php
session_start(); ?>


<!DOCTYPE html>
<html lang="es">

</html>

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

  <br>
  <br>
  <br>
  <br>
  <?php
    //var_dump($_POST);
  // $_SESSION['carrito'][] = $_POST['result'];
  // $_SESSION["carrito"] = [];
  foreach ($_POST as $key => $value) {
    $id = str_replace("id-", "", $key);
    
    if (isset($_SESSION['carrito'][$id])) {
      // echo "Esta guardado" . $_SESSION['carrito'][$id]["id"];
      
      $_SESSION['carrito'][$id]["cantidad"] = intval($_SESSION['carrito'][$id]["cantidad"]) + intval($value);
    } else {
     

      if ($value != "") {
        $_SESSION['carrito'][$id] = array(
          "cantidad" => $value,
          "id" => $id
        );
      }

      // echo "No Esta guardado";
    }
    // echo $key . " : " . $value;
    // echo "<br>";
  }
  require 'include/database.php';
  $ids = "";
  if (isset($_SESSION['carrito'])) {
    # code...
 
    foreach ($_SESSION['carrito'] as $result) {
      $ids .= " id = " . $result["id"] . " or";
    }
  }
  $ids = substr($ids, 0, strlen($ids) - 2);
 
  $query = 'SELECT * FROM peces WHERE ' . $ids;
  $records = $conn->prepare($query);
  $records->execute();
  $results =   $records->fetchAll();

 // var_dump($results);
  ?>

  <div class="container">
    <div class="row">
      <?php
      $total=0;
      for ($i = 0; $i < count($results); $i++) {
        $pez = $results[$i];
        $total += $_SESSION['carrito'][$pez["id"]]["cantidad"]*$pez['precio']; 
      ?>

        <div class="col-3">
          <div class="card">
            <img src="<?php echo 'assets/media/peces/' . $pez['foto']; ?> " class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cantidad: <?php echo $_SESSION['carrito'][$pez["id"]]["cantidad"] ?> </h5>
              <h5>Subtotal:<?php echo $_SESSION['carrito'][$pez["id"]]["cantidad"]*$pez['precio'] ?>€</h5>
            </div>
          </div>
        </div>
      


      <?php
      } 
      ?>
    
      <h5><br><br>El total de los productos es: <?php echo $total?>€</h5>
      <br>
      <br>
      
    </div>
    <a class="btn btn-success" href="pago.php">Continuar con el pago</a>
  </div>
  

  
  
</body>


</html>