<?php
    session_start();

    if ((isset($_SESSION['zalogowany'])) &&  ($_SESSION['zalogowany']==true))
    {
      header('Location: gra.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="pl">
<body>

<a href="rejestracja.php">Rejestracja </a>
<br><br>
<form action="zaloguj.php" method="post">
Login: <br> <input type="text" name="login"> <br>
Hasło <br> <input type="password" name="haslo"> <br> <br>
<input type="submit" value="Zaloguj się">


<?php
  if(isset($_SESSION['blad']))  echo $_SESSION['blad'];
?>


</form>

</body>
</html>
