<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: /login');
}
require '../include/database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
     header("Location: /acuariotartesos");
  } else {
    $message = 'Lo siento, esas credenciales no coinciden';
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Conectarse</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">

</head>
 
<body>
 
  <?php if (!empty($message)) : ?>
    <p> <?= $message ?></p>
  <?php endif; ?>

  <h1>Conectarse</h1>
  <span>o <a href="signup.php">Registrarse</a></span>

  <form action="login.php" method="POST">
    <input name="email" type="text" placeholder="ingresa tu email">
    <input name="password" type="password" placeholder="ingresa tu contraseña">
    <input type="submit" value="Entrar">
  </form>
</body>

</html>