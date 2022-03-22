<header class="nav_container">
  <div class="my-container have-flex">
    <div class="left">
      <ul class="l-menu-list">
        <li class="l-list-items"><a href="#" class="l-list-links"><i class="fas fa-envelope"></i>&nbsp; opeitechinnovations@gmail.com</a></li>
        <li class="l-list-items"><a href="#" class="l-list-links">Call us on: 0540307609</a></li>
        <li class="l-list-items"><a href="#" class="l-list-links">Contact</a></li>
      </ul>
    </div>
    <div class="right">
      <ul class="list-menu">
        <li class="list-items"><a href="#" class="list-links"><i class="fab fa-facebook"></i></a></li>
        <li class="list-items"><a href="https://www.twitter.com/@OpeiTech" target="_blank" class="list-links"><i class="fab fa-twitter"></i></a></li>
        <li class="list-items"><a href="#" class="list-links"><i class="fab fa-instagram"></i></a></li>
        <li class="list-items"><a href="#" class="list-links"><i class="fab fa-linkedin"></i></a></li>
        <li class="list-items"><a href="#" class="list-links"><i class="fab fa-youtube"></i></a></li>
      </ul>
    </div>
  </div>
  <nav class="navbar navbar-inverse " id="nav-index"style="border-radius: 0px; background: #02af66; color: white;">
  <div class="container-fluid">
    <div class="navbar-header" style="display: flex; flex-direction: row;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>                        
      </button>
      <!-- <a class="navbar-brand" href="#" style="color:white">OpeiTechInnovations</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="" id="work-it"> 
      
      <li><a class="navbar-brand" href="#">WebSiteName</a></li>
        <li class="<?php if($page == 'home'){echo 'active';}?>"><a href="index.php" style="color: white">Home</a></li>
        <li class="<?php if($page == 'about'){echo 'active';}?>"><a href="about.php" style="color: white">About </a></li>
        <li class="dropdown dropdown-me" class="active">
          <a  data-toggle="dropdown" href="#" style="color:  white">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="doit" href="web_app_dev.php" >Web Application Development</a></li>
            <li><a id="doit" href="website_dev.php">Website Development</a></li>
            <li><a id="doit" href="mobile_app_dev.php">Mobile App Development</a></li>
            <li><a id="doit" href="consultancy.php">Consultancy</a></li>
            <li><a id="doit" href="training.php">Training</a></li>
          </ul>
        </li>
        
        <li class="<?php if($page == 'product'){echo 'active';}?>"><a  href="products.php" style="color: white" class="current">Flagship Products</a></li>
        <li class="<?php if($page == 'partners'){echo 'active';}?>"><a href="partners.php" style="color: white">Partners</a>
        </li>
        <li class="<?php if($page == 'team'){echo 'active';}?>"><a href="team.php" style="color: white">The Team </a></li>
        <li class="<?php if($page == 'crs'){echo 'active';}?>"><a href="crs.php" style="color: white">C.S.R </a></li>
        <li class="<?php if($page == 'contact'){echo 'active';}?>"><a href="contact.php" style="color: white">Contact </a></li>
      </ul>
    </div>
  </div>
</nav>
</header>
