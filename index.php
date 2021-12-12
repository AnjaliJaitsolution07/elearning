<!DOCKTYPE html>
<html Lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">

        <!--bootstrap css--->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!----Font awesome---->
        <link rel="stylesheet" href="css/all.min.css">

        <!---Google Font---->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Ubuntu:wght@700&display=swap" rel="stylesheet">


        <!---Custom css---->
        <link rel="stylesheet" href="css/style.css">

        <title>SmartTech</title>
</head>
<body>
<!---start Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
  <!--div class="container-fluid"  -->
    <a class="navbar-brand" href="index.php">SmartTech</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5" >
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Courses</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Payment</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Login </a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Signup</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
      </ul>
    </div>
  <!--/div-->
</nav>
<!--- End navigation --->


<!----Start Video background-------->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/banvid.mp4" >
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
      <h1 class="my-content">Welcome to SmartTech</h1>
      <small class="my-content">Learn and Implements</small><br/>
      <a href="#" class="btn btn-danger">Get started</a>
    </div>
</div>
<!----End Video background-------->


<!----Start text Banner-------->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i> 100+ Online
       Courses</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i> Expert
       Instructors</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i> Lifetime
       Access</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back
       Guarantee*</h5>
    </div>
  </div>
</div>
<!----End text Banner-------->

<!-------Start Most Popular Course -->
<div class="container mt-5">
  <h1 class="text-center">Popular Course</h1>
  <!---Start Most Popular Course 1st Card Deck-->
  <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
      <div class="card">
        <image src="images/courseimg/Guitar.jpg" class="card-img-top" alt="Guitar" />

        <div class="card-body">
          <h5 class="card-title">Learn Guitar Easy Way</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur 
            adipisicing elit. Obcaecati accusantium id dolore numquam 
            quaerat voluptates velit reiciendis pariatur, maxime corrupti
             impedit sunt, suscipit asperiores unde.
             Minus reiciendis architecto suscipit. Facilis, nemo.</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price. <small><del> 2000
            
          </del></small>
          <span class="font-weight-bolder"> &#8377 200</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-fight" 
            href="#">Enroll</a>
        </div>
      </div>
    
      <div class="card">
        <image src="images/courseimg/Guitar.jpg" class="card-img-top" alt="Guitar" />

        <div class="card-body">
          <h5 class="card-title">Learn Guitar Easy Way</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur 
            adipisicing elit. Obcaecati accusantium id dolore numquam 
            quaerat voluptates velit reiciendis pariatur, maxime corrupti
             impedit sunt, suscipit asperiores unde.
             Minus reiciendis architecto suscipit. Facilis, nemo.</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price. <small><del> 2000
            
          </del></small>
          <span class="font-weight-bolder"> &#8377 200</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-fight" 
            href="#">Enroll</a>
        </div>
      </div>
   
      <div class="card">
        <image src="images/courseimg/Guitar.jpg" class="card-img-top" alt="Guitar" />

        <div class="card-body">
          <h5 class="card-title">Learn Guitar Easy Way</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur 
            adipisicing elit. Obcaecati accusantium id dolore numquam 
            quaerat voluptates velit reiciendis pariatur, maxime corrupti
             impedit sunt, suscipit asperiores unde.
             Minus reiciendis architecto suscipit. Facilis, nemo.</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price. <small><del> 2000
            
          </del></small>
          <span class="font-weight-bolder"> &#8377 200</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-fight" 
            href="#">Enroll</a>
        </div>
      </div>
    </a>
  </div>
   <!---end Most Popular Course 1st Card Deck-->
   <!---Start Most Popular Course 2st Card Deck-->
  <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
      <div class="card">
        <image src="images/courseimg/Python.svg.png" class="card-img-top" alt="Python" />

        <div class="card-body">
          <h5 class="card-title">Learn Python</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur 
            adipisicing elit. impedit sunt, suscipit asperiores unde.
             Minus reiciendis architecto suscipit. Facilis, nemo.</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price. <small><del> 2000
            
          </del></small>
          <span class="font-weight-bolder"> &#8377 200</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-fight" 
            href="#">Enroll</a>
        </div>
      </div>
    </a>
  </div>
   <!---end Most Popular Course 2nd Card Deck-->
   <div class="text-center m-2">
      <a class="btn btn-danger btn-sm" href="#">View All Course</a>
   </div>
</div>
<!-------End Most Popular Course -->


<!----jquery and Bootstrap Javascript---->
<script src="js/jquery.min.js"></script>
<script src="js/proper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

 <!----Font awesome js---->
<script src="js/all.min.js"></script>

</body>

</html>