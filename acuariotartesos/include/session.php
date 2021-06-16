<?php
session_start();
 echo $_SESSION['user_id'];
echo isset($_SESSION['user_id']);

if (!isset($_SESSION['user_id'])) {
    header('Location: /acuariotartesos/login/login.php');
}
