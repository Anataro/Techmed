<?php
    session_start();
    
      //Sprawdź poprawność nickname'a
      
      
  
    
    if (isset($_POST['email']))
     { 
      //Udana walidacja? Załóżmy, że tak!
      $wszystko_OK=true;

      //Sprawdź poprawność nickname'a
      $nick = $_POST['nick'];
     
      
   
      $nazwisko = $_POST['nazwisko'];
      
      $nazwa = $_POST['nazwa'];

        //Sprawdzenie długości nicka
        if ((strlen($nazwa)<3) || (strlen($nazwa)>20))
        {
          $wszystko_OK=false;
          $_SESSION['e_nazwa']="Nick musi posiadać od 3 do 20 znaków!";
        }
        
        if (ctype_alnum($nazwa)==false)
        {
          $wszystko_OK=false;
          $_SESSION['e_nazwa']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
  
        
        }
      // Sprawdź poprawność adresu email
      $email = $_POST['email'];
      $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
      
      if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
      {
        $wszystko_OK=false;
        $_SESSION['e_email']="Podaj poprawny adres e-mail!";
      }
      
      //Sprawdź poprawność hasła
      $haslo1 = $_POST['haslo1'];
      $haslo2 = $_POST['haslo2'];
      
      if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
      {
        $wszystko_OK=false;
        $_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
      }
      
      if ($haslo1!=$haslo2)
      {
        $wszystko_OK=false;
        $_SESSION['e_haslo']="Podane hasła nie są identyczne!";
      }	
  
      $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
      
      //Czy zaakceptowano regulamin?
      if (!isset($_POST['regulamin']))
      {
        $wszystko_OK=false;
        $_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
      }				
      
      //Bot or not? Oto jest pytanie!
     
      
  
      
      //Zapamiętaj wprowadzone dane
      $_SESSION['fr_nick'] = $nick;
      $_SESSION['fr_nazwisko'] =$nazwisko;
      $_SESSION['fr_nazwa'] = $nazwa;
      $_SESSION['fr_email'] = $email;
      $_SESSION['fr_haslo1'] = $haslo1;
      $_SESSION['fr_haslo2'] = $haslo2;
      if (isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;
      
      require_once "connect.php";
      mysqli_report(MYSQLI_REPORT_STRICT);
      
      try 
      {
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        if ($polaczenie->connect_errno!=0)
        {
          throw new Exception(mysqli_connect_errno());
        }
        else
        {
          //Czy email już istnieje?
          $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
          
          if (!$rezultat) throw new Exception($polaczenie->error);
          
          $ile_takich_maili = $rezultat->num_rows;
          if($ile_takich_maili>0)
          {
            $wszystko_OK=false;
            $_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
          }		
  
          // //Czy nick jest już zarezerwowany?
          // $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");
          
          // if (!$rezultat) throw new Exception($polaczenie->error);
          
          // $ile_takich_nickow = $rezultat->num_rows;
          // if($ile_takich_nickow>0)
          // {
          //   $wszystko_OK=false;
          //   $_SESSION['e_nick']="Istnieje już gracz o takim nicku! Wybierz inny.";
          // }
          
          if ($wszystko_OK==true)
          {
            //Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
            
            if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick','$nazwisko','$nazwa', '$haslo_hash', '$email')"))
            {
              $_SESSION['udanarejestracja']=true;
              header('Location: witamy.php');
            }
            else
            {
              throw new Exception($polaczenie->error);
            }
            
          }
          
          $polaczenie->close();
        }
        
      }
      catch(Exception $e)
      {
        echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
        echo '<br />Informacja developerska: '.$e;
      }
      
    }
		

?>
<!DOCTYPE html>
<html lang="pl">
<head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style>
.error 
{
  color:red;
  margin-top: 10px;
  margin-bottom: 10px;
  
} 
</style>

</head>
<body>


<?php 
define('__ROOT__', dirname(dirname(__FILE__))); 
$title = 'Techmed';
require_once(__ROOT__.'/Techmed/includes/header.php'); 
?>

                                    <br>
                                    <div class="container">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-header">Rejestracja</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="#">
                                    <!-- Imię -->
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label"><i class="fas fa-id-card"></i> Imię:</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"></i></span>
                                                
                                                 <input type="text" class="form-control"
                                                  value="<?php if(isset($_SESSION['fr_nick']))
                                                  {
                                                    echo $_SESSION['fr_nick'];
                                                    unset($_SESSION['fr_nick']);
                                                  } 
                                                  ?>"
                                                    name="nick" > <br>

                                                
                                            </div>
                                            <?php
                                                  if(isset($_SESSION['e_nick']))
                                                  {
                                                    
                                                    echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
                                                    
                                                    unset($_SESSION['e_nick']);
                                                  }

                                                  ?>
                                        </div>
                                    </div>
                                    <!-- Koniec imienia -->
                                    <!-- Nazwisko -->
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label"><i class="fas fa-id-card"></i> Nazwisko:</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"></i></span>
                                                <input type="text" class="form-control"
                                                value="<?php if(isset($_SESSION['fr_nazwisko']))
                                                {
                                                  echo $_SESSION['fr_nazwisko'];
                                                  unset($_SESSION['fr_nazwisko']);
                                                } 
                                                ?>" name="nazwisko" > <br>
                                                
                                            </div>
                                            <?php
                                                if(isset($_SESSION['e_nazwisko']))
                                                {
                                                  echo '<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
                                                  unset($_SESSION['e_nazwisko']);
                                                }

                                                ?>
                                        </div>
                                    </div>
                                    <!-- Koniec nazwiska -->
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label"><i class="fas fa-id-card"></i > Nazwa:</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"></i></span>
                                                <input type="text" class="form-control"
                                                value="<?php if(isset($_SESSION['fr_nazwa']))
                                                {
                                                  echo $_SESSION['fr_nazwa'];
                                                  unset($_SESSION['fr_nazwa']);
                                                } 
                                                ?>" name="nazwa" > <br>
                                                
                                            </div>
                                            <?php
                                                if(isset($_SESSION['e_nazwa']))
                                                {
                                                  echo '<div class="error">'.$_SESSION['e_nazwa'].'</div>';
                                                  unset($_SESSION['e_nazwa']);
                                                }

                                                ?>
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label"><i class="fas fa-envelope"></i> Email:</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"></i></span>
                                                <input type="text" class="form-control"
                                                value="<?php if(isset($_SESSION['fr_email']))
                                                {
                                                  echo $_SESSION['fr_email'];
                                                  unset($_SESSION['fr_email']);
                                                } 
                                                ?>" name="email" > <br>
                                                
                                            </div>
                                            <?php
                                                if(isset($_SESSION['e_email']))
                                                {
                                                  echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                                                  unset($_SESSION['e_email']);
                                                }

                                                ?>
                                        </div>
                                    </div>
                                          <!-- Koniec email -->
                                          <!-- Haslo -->
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label"><i class="fas fa-lock"></i> Hasło:</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"></i></span>
                                                  <input type="password" class="form-control"   value="<?php
                                                if (isset($_SESSION['fr_haslo1']))
                                                {
                                                  echo $_SESSION['fr_haslo1'];
                                                  unset($_SESSION['fr_haslo1']);
                                                }
                                              ?>" name="haslo1" /><br />
                                              
                                             
                                            </div>
                                            <?php
                                                if (isset($_SESSION['e_haslo']))
                                                {
                                                  echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                                                  unset($_SESSION['e_haslo']);
                                                }
                                              ?>	
                                        </div>
                                    </div>
                                    <!-- Koniec hasła -->
                                    <!-- Potwierdz hasło -->
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label"><i class="fas fa-lock"></i> Potwierdź hasło</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"></i></span>
                                                <input type="password" class="form-control"  value="<?php
                                                if (isset($_SESSION['fr_haslo2']))
                                                {
                                                  echo $_SESSION['fr_haslo2'];
                                                  unset($_SESSION['fr_haslo2']);
                                                }
                                              ?>" name="haslo2" />
                                            </div>
                                        </div>
                                    </div>
                                                <!-- koniec potwierdź hasłko -->
                                                <!-- Regulamin -->
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label"></label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"></i></span>
                                                <input type="checkbox" name="regulamin" <?php
                                                  if (isset($_SESSION['fr_regulamin']))
                                                  {
                                                    echo "checked";
                                                    unset($_SESSION['fr_regulamin']);
                                                  }
                                                    ?>
                                                    />
                                                    Akceptuję regulamin
                                            </div><?php
                                                    if (isset($_SESSION['e_regulamin']))
                                                    {
                                                      echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
                                                      unset($_SESSION['e_regulamin']);
                                                    }
                                                  ?>	
                                        </div>
                                    </div>
                                                    <!-- Koniec regulamin  -->
                                                   
                                    <div class="form-group ">

                                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                                    </div>
                                    <div class="login-register">
                                        <a href="placowki.php">Masz już konto? Zaloguj się</a>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>
<?php  
require_once(__ROOT__.'/Techmed/includes/footer.php'); 
?>


</body>
</html>
