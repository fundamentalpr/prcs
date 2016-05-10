<?php include_once("includes/header.php"); ?>

<body>
<?php include_once("includes/nav2.php"); ?>
<?php include_once("includes/analyticstracking.php"); ?>
<section>

  <div class="jumbotron text-center">
     <div class="container">
    <div class="row">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/PRCS-teacher-student-slide.jpg" title="Our teachers are highly qualified and our 
classes are completely in english" alt="Teacher giving student help" >
      </div>

      <div class="item">
        <img src="images/PRCS-prekinder-having-fun.jpg" title="We offer a caring, fun and safe enviroment to all of our students" alt="We offer a caring, fun and 
safe enviroment to all of
our students" >
      </div>
    
      <div class="item">
        <img src="images/PRCS-student-go-to-best-universities.jpg" title="Our graduates go
to the best universities." alt="Our graduates go
to the best universities." >
      </div>
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    </div>
  </div>
  </div>
</section>
<?php include("includes/contact-section2.php"); ?>
<?php include_once("includes/footer.php"); ?>
</body>
</html>