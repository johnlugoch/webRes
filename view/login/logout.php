<?php
/*session_start();
unset($_SESSION['user_name']);
header('Location: index.php');*/

  session_start();
  unset($_SESSION["user_name"]); 
  unset($_SESSION["autenticado"]);
  session_destroy();
  header("Location: index.php");
  exit;
?>
