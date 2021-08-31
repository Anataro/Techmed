<?php
    session_start();

    if (!isset($_SESSION['zalogowany']))
    {
      header('Location: index.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="pl">
<body>

<?php 
define('__ROOT__', dirname(dirname(__FILE__))); 
$title = 'Techmed';
require_once(__ROOT__.'/Techmed/includes/header.php'); 
?>




<?php

    echo "<p>Imię ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
  echo " <b>Nazwisko</b>: ".$_SESSION['nazwisko'];
  echo "<p><b>Nazwa użytkownika</b>: ".$_SESSION['nazwa'];
  echo "<p><b>E-mail</b>: ".$_SESSION['email'];
  

	
?>


</body>
</html>
