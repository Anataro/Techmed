<!DOCTYPE html>
<html lang="pl">
<body>

<?php 
define('__ROOT__', dirname(dirname(__FILE__))); 
$title = 'Techmed';
require_once(__ROOT__.'/Techmed/includes/header.php'); 
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/index/serce.jpg" alt="First slide" height="400">
      <div class="carousel-caption d-none d-md-block">
    <h5 >Sztuczne serce</h5>
    <p>Nowośc stworzona na drukarce 3D działająca jak normalne serce</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/index/pluca.jpg" alt="Second slide" height="400" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/index/okulary.jpg" alt="Third slide" height="400">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">

    <img class="rounded-circle" src="img/index/tak.jpg" alt="Generic placeholder image"  width="140" height="140">

    <h2>Aleksander Sieradzki</h2>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p><a class="btn btn-secondary" href="zabiegi.php" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="rounded-circle" src="img/index/poter.jpg" alt="Generic placeholder image" width="140" height="140">
    <h2>Jakub Poter</h2>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    <p><a class="btn btn-secondary" href="zabiegi.php" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="rounded-circle" src="img/index/przemo.jpg" alt="Generic placeholder image" width="140" height="140">
    <h2>Przemysław Grzejszczak</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class="btn btn-secondary" href="zabiegi.php" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
<div class="col-lg-4">
    <img class="rounded-circle" src="img/index/piotr.jpg" alt="Generic placeholder image" width="140" height="140">
    <h2>Piotr Lefik</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class="btn btn-secondary" href="zabiegi.php" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<style>

h5 {
    color:black;
}
p
{
    color:black;
    text-align: center;
}
h2 {
    text-align: center;
}
div.col-lg-4{
    margin: auto;
  width: 50%;
  padding: 10px;
}
img.rounded-circle{
  
    display: block;
  margin-left: auto;
  margin-right: auto;
  

 
}

</style>


<?php  
require_once(__ROOT__.'/Techmed/includes/footer.php'); 
?>


</body>
</html>
