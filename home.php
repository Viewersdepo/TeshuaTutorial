<?php include 'header.php';?>

<section>
<div>
    <h2 class="mb-3 p-2">Home</h2>
</div>
  <!-- First Row -->
  <div class="row">
      <div class="p-5 bg-secondary text-white rounded col-sm-3 container text-center mb-3 ">
          <display1>Learning is fun!!!</display1>
      </div>

      <div class="col-sm-3 mb-3">
      <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/stud.jpg" alt="student1" class="d-block w-90" height="100%" width="100%">
    </div>
    <div class="carousel-item">
      <img src="Images/stud2.jpg" alt="student2" class="d-block w-90" height="100%" width="100%">
    </div>
    <div class="carousel-item">
      <img src="Images/stud7.jpg" alt="student3" class="d-block w-90" height="100%" width="100%">
    </div>
    <div class="carousel-item">
      <img src="Images/stud4.jpg" alt="student4" class="d-block w-90" height="100%" width="100%">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
  </div>
          <!-- end of second col -->
      </div>
      <div class="col-sm-3 p-5 bg-warning text-white text-center mb-3 rounded">
        <display3>Education is the best legacy</display3>
      </div>
  </div>

  <!--Second Row  -->
  <div class="row">
      <div class="col-sm-3">
          <img src="Images/stud9.jpg" class="img-fluid" height="100%" width="100%" alt="children">
      </div>
      <div class="col-sm-3 container text-center mb-3 p-5 bg-dark text-white rounded">
          <p>Your Kids Needs The best.</p>
      </div>
      <div class="col-sm-3 mb-3">
          <img src="Images/stud5.jpg" height="100%" width="100%" class="img-fluid" alt="children learning">
      </div>
  </div>
</section>
<?php include 'footer.php';?>