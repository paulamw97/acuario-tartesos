<?php
  session_start();

  require '../include/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido a Acuarios Tartesos</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
    <header>
        <a href="/login">Acuario Tartesos</a>
    </header>

    <?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['email']; ?>
      <br>Ha iniciado sesión correctamente
      <a href="../index.php">
      <h1>Aceder a la tienda</h1>
      </a>
    <?php else: ?>
      <h1>Resgistrate aquí</h1>

      <a href="login.php">Conectarse</a> or
      <a href="signup.php">Registrarse</a>
    <?php endif; ?>
  </body>
</html>
