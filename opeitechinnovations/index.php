<?php
$page = 'home';
 include("includes/links1.php");
 include("includes/header1.php");
//  echo head();
//  echo navbar();
?>
<!-- page begins here -->
<section class="section" id="media">
 <div id="carouselExampleIndicators" class="carousel slide me-caro" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://frankotrading.com/img/cms/delivery%20.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://frankotrading.com/img/cms/Desktop-nd-Tablet_1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/ik2dp.jpeg" class="d-block w-100" alt="..." style="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="rightside">
  <div class="sideimg" id="zoom"><img src="https://frankotrading.com/img/cms/delivery%20.jpg" alt="" class="rimg"></div>
 <div class="sideimg" id="zoom"><img src="https://frankotrading.com/img/cms/Desktop-nd-Tablet_1.jpg" alt="" class="rimg"></div> 
  
</div>
</section>
<br><br>
<!-- card section -->
<section class="carts">
 <div class="card" style="width: 30rem;" id="zoom1">
  <img src="img/consult.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4>Consultancy</h4>
    <p class="card-text">OpeiTechInnovations provides you with the best advice and technology to grow your business</p>
  </div>
</div>
<div class="card" style="width: 30rem;" id="zoom1">
  <img src="img/mobile-app.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4>Mobile App Development</h4>
    <p class="card-text">At OpeiTechInnovations, we have the experts to develop your mobile application to suit your desire</p>
  </div>
</div>
<div class="card" style="width: 30rem;" id="zoom1">
  <img src="img/website.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4>Website Development</h4>
    <p class="card-text">OpeiTechInnovations has a layed down phases to develop a custom resposive website to grow your business</p>
  </div>
</div>
<div class="card" style="width: 30rem;" id="zoom1">
  <img src="img/training.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4>IT Training</h4>
    <p class="card-text">OpeiTechInnovations provides IT training for corporate institution</p>
  </div>
</div>
<div class="card" style="width: 30rem;" id="zoom1">
  <img src="img/web-app.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4>Web App Development</h4>
    <p class="card-text">At OpeiTechInnovations, we develop custom web application to suit your businesses</p>
  </div>
</div>
</section>
<!-- page ends here -->

<!-- modal starts -->

<!-- modal ends -->

<!-- footer -->
<?php 
 include("includes/footer.php");
  echo footer();
 ?>