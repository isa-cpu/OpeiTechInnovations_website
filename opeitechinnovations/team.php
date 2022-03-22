<?php 
$page = 'team';
 include("includes/links1.php");
 include("includes/header1.php");
//  echo head();
//  echo navbar();
?>
<!-- page begins here -->
<div class="container-team team-flex">
 <div class="team-logo-container">
  <div class="team-cont-1"></div>
  <div class="team-cont-1"></div>
  <div class="team-cont-1"></div>
  <div class="team-cont-1"></div>
 </div>
 <!-- team content starts -->
 <div class="team-content-description">
  <div class="team-container">
  <div class="card" style="width: 30rem;" id="zoom13">
  <img src="img/ik2dp.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4>Isaac Opei</h4>
    <p class="card-text">Bsc Computer Science</p>
    <p class="card-text"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    View Profile
  </button></a></p>
  </div>
</div>
<div class="card" style="width: 30rem;" id="zoom13">
  <img src="img/pakistan.jpeg" class="card-img-top " alt="..." style="height:200px;">
  <div class="card-body">
    <h4>Mohammed Husnain</h4>
    <p class="card-text">Bsc COMSATS</p>
    <p class="card-text"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
    View Profile
  </button></p>
  </div>
</div>
   </div>
   <!-- modal starts -->
  <div class="container">
  <!-- The Modal Isaac-->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <div class="sign div-body">
      <span class="fast-flicker">O</span>pei<span class="flicker">T</span>ech <span class="flicker">I</span>nnova <span class="flicker">ti</span>on
    </div>
          <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        
        <!-- Modal body  for isaac-->
        <div class="modal-body">
          <p>
          <div class="card" style="width: 30rem; margin: auto;" id="zoom13">
  <img src="img/ik2dp.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h4>Isaac Opei</h4>
    <p class="card-text">Bsc Computer Science</p>
    <p class="card-text"></a></p>
  </div>
</div></p>
          <p>Bcs Computer Science Degree holder, attended Regentrophen College of Applied Science, Ghana and completed in Florida Agriclture & Mechanical University (FAMU), USA</p>

          <p>Founder and CEO of OpeiTechInnovations
           I am a loyal and trustworthy person. A good timekeeper who's still eager to pick up new skills. I am a friendly, courteous, and supportive person with a strong sense of humor. I can work independently as well as in a group setting in a fast-paced environment. My professional ambitions are to work as a data scientist with a focus on machine learning and artificial intelligence.</p>
        </div>
        <a href="isaac_opei_cv.pdf" download="isaac_opei_cv" style="margin-left:35%"><button type="button" class="btn btn-info" style="">Download Resume</button></a>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 
</div>
   <!-- modal ends -->
   <!-- modal two starts -->
    <div class="container">
  <!-- The Modal Isaac-->
  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <div class="sign div-body">
      <span class="fast-flicker">O</span>pei<span class="flicker">T</span>ech <span class="flicker">I</span>nnova <span class="flicker">ti</span>on
    </div>
          <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        
        <!-- Modal body  for isaac-->
        <div class="modal-body">
          <p>
          <div class="card" style="width: 30rem; margin:auto" id="zoom13">
    <img src="img/pakistan.jpeg" class="card-img-top " alt="..." style="height:200px;">
    <div class="card-body">
    <h4>Mohammed Husnain</h4>
    <p class="card-text">Bsc COMSATS</p>
    <p class="card-text"></p>
  </div>
</div></p>
          <p>Bcs Computer Science Degree holder, attended Regentrophen College of Applied Science, Ghana and completed in Florida Agriclture & Mechanical University (FAMU), USA</p>

          <p>Founder and CEO of OpeiTechInnovations
           I am a loyal and trustworthy person. A good timekeeper who's still eager to pick up new skills. I am a friendly, courteous, and supportive person with a strong sense of humor. I can work independently as well as in a group setting in a fast-paced environment. My professional ambitions are to work as a data scientist with a focus on machine learning and artificial intelligence.</p>
        </div>
        <a href="husnain.pdf" download="husnain" style="margin-left:35%"><button type="button" class="btn btn-info" style="">Download Resume</button></a>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 
</div>
   <!-- modal two ends -->
 </div>
 <!-- team content ends -->
</div>
<!-- page ends here -->

<!-- footer -->
<?php 
 include("includes/footer.php");
  echo footer();
 ?>