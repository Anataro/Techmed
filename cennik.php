<!DOCTYPE html>
<html lang="pl">
<body>



<?php 
define('__ROOT__', dirname(dirname(__FILE__))); 
$title = 'Techmed';
require_once(__ROOT__.'/Techmed/includes/header.php'); 
?>



<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>




<div class="container">
<table>
<br>
  <tr>
    <th> <i class="fas fa-heartbeat"></i>  Badania - kardiologia</th>
    <th> <i class="fas fa-wallet"></i> Cena</th>
    
  </tr>
  <tr>
    <td>Konsultacja kardiologiczna</td>
    <td>130zł</td>
    
  </tr>
  <tr>
    <td>Konsultacja kardiologiczna + EKG</td>
    <td>150zł</td>
    
  </tr>
  <tr>
    <td>EKG z opisem</td>
    <td>35zł</td>
    
  </tr>
  <tr>
    <td>USG (ECHO serca) przezprzełykowe</td>
    <td>400zł</td>
  </tr>
  <tr>
    <td>Kontrola kardiowertera </td>
    <td>120zł </td>
    
  </tr>
  <tr>
    <td>Kontrola stymulatora</td>
    <td>120zł</td>
    
  </tr>


</table>
<br>
</div>
<div class="container">
<table>
  <tr>
    <th><i class="fas fa-glasses"></i> Badania - okulistyka</th>
    <th> <i class="fas fa-wallet"></i> Cena</th>
    
  </tr>
  <tr>
    <td>Wizyta podstawowa</td>
    <td>140zł</td>
    
  </tr>
  <tr>
    <td>Badanie USG dwoje oczu</td>
    <td>200zł</td>
    
  </tr>
  <tr>
    <td>Fotografia cyfrowa narządu wzroku z wydrukiem</td>
    <td>60zł</td>
    
  </tr>
  <tr>
    <td>Gonioskopia</td>
    <td>60zł</td>
  </tr>
  <tr>
    <td>Angiografia fluoresceinowa (FLA)s</td>
    <td>200zł</td>
    
  </tr>
  <tr>
    <td>Badanie akomodacji</td>
    <td>50zł</td>
    
  </tr>
</table>
<br>
</div>
<div class="container">
<table>
  <tr>
    <th> <img  src="img/lungs.png" alt="lungs" width="20" height="20"> Badania - Pulmonologia</th>
    <th> <i class="fas fa-wallet"></i> Cena</th>
    
  </tr>
  <tr>
    <td>Bezdech senny</td>
    <td>380zł</td>
    
  </tr>
  <tr>
    <td>Bronchoskopia</td>
    <td>150zł</td>
    
  </tr>
  <tr>
    <td>Porada pulmonologiczna</td>
    <td>130zł</td>
    
  </tr>
  <tr>
    <td>Porada pulmonologiczna</td>
    <td>70zł</td>
  </tr>
  <tr>
    <td>Spirometria</td>
    <td>30zł</td>
    
  </tr>
  <tr>
    <td>Pomiar pojemności płuc </td>
    <td>50zł</td>
    
  </tr>
</table>
<br>
</div>
<div class="container">
<table>
  <tr>
    <th>Badania - kardiologia</th>
    <th> <i class="fas fa-wallet"></i> Cena</th>
    
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    
  </tr>
</table>

</div>




<?php  
require_once(__ROOT__.'/Techmed/includes/footer.php'); 
?>





</body>
</html>
