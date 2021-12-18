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
        <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Payment</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link" 
        data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login </a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" 
        data-bs-target="#stuRegModalCenter">Signup</a></li>
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
      <a href="#" class="btn btn-danger"  data-bs-toggle="modal" 
      data-bs-target="#stuRegModalCenter">Get started</a>
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
  <div class="card-group">
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
          <p class="card-text d-inline">Price: <small><del> 2000
            
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
  </div>
   <!---end Most Popular Course 1st Card Deck-->
   <!---Start Most Popular Course 2st Card Deck-->
  <div class="card-deck mt-4">
    <div class="card-group">
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
  </div>
   <!---end Most Popular Course 2nd Card Deck-->
   <div class="text-center m-2">
      <a class="btn btn-danger btn-sm" href="#">View All Course</a>
   </div>
</div>
<!-------End Most Popular Course -->

<!------Start Contact Us--------->
<?php
  include ('./contact.php');
?>
<!------End of Contact Us-------->


<!-- Start Students Testimonial ---->
<div class="container-fluid mt-5" style="background-color: #4B7289" id="Feedback">
  <h1 class="text-center testyheading p-4">Student's Feedback</h1>
  <div class="row">
    <div class="col-md-12">
      <div id="testimonial-slider" class="owl-carousel">
        <div class="testimonial">
          <p class="description">
            Lorem ipsum dolar sit amet consectetur adipisicing elit.
            Expendita, dignissimos blanditiis.
          </p>
          <diV class="pic">
            <img src="images/stu/student2.jpg" alt=""/>
          </diV>
          <div class="testimoinal prof">
            <h4>Sonam</h4>
            <small>Web Developer</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end Students Testimonial ---->

<!------start Social zFollow------------>
<div class="container-fluid bg-danger">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab 
      fa-facebook-f"></i>Facebook</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab 
      fa-twitter"></i>Twitter</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab 
      fa-whatsapp"></i>Whatsapp</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab 
      fa-facebook-f"></i>facebook</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab 
      fa-instagram"></i>Instagram</a>
    </div>
  </div>
</div>
<!------end Social zFollow------------>

<!------Start About Section------------>
<div class="container-fluid p-4" style="background-color: #E9ECEF">
  <div class="container" style="background-color: #E9ECEF">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About Us</h5>
        <p>SmartTech provides access to the best education, partnering with top school 
          and organizations to offer courses online.
        </p>
      </div>
      <div class="col-sm">
        <h5>Category</h5>
        <a class="text-dark" href="#">Web Development</a><br/>
        <a class="text-dark" href="#">Web Desining</a><br/>
        <a class="text-dark" href="#">Android App Dev</a><br/>
        <a class="text-dark" href="#">iOS Development</a><br/>
        <a class="text-dark" href="#">Data Analysis</a><br/>
        <a class="text-dark" href="#">Web Development</a><br/>
      </div>
      <div class="col-sm">
        <h5>Contact Us</h5>
        <p>SmartTech Pvt Ltd <br> Birgunj, Nepal<br> Ph. 00000000000</p>
      </div>
    </div>
  </div>
</div><!------End About Section------------>

<!------Start Footer------------>
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">
    Copyright &copy; 2021 || Designed By E-Learning ||<a href="#login" 
    data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Admin Login</a>
  </small>
</footer>
<!------End Footer------------>


<!------Start Student registration Modal------------>

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" 
aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="btn-close" 
        data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <!---------Start Student Registration form---------->       
        <form>
          <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="stuname" class="pl-2 font-weight-bold">Name</label>
            <input type="text" class="form-control" id="stuname" placeholder="Name"
            name="stuname">
          </div>
          <div class="form-group">
            <i class="fas fa-address-book"></i>
            <label for="address" class="pl-2 font-weight-bold">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Address"
            name="address">
          </div>
          <div class="form-group">
            <i class="fas fa-book"></i>
            <label for="course" class="pl-2 font-weight-bold">Courses</label>
            <input type="text" class="form-control" id="course" placeholder="Courses"
            name="course">
          </div>
          <div class="form-group">
            <i class="fas fa-phone"></i>
            <label for="contactnum" class="pl-2 font-weight-bold">Contact Number(Whatsapp)</label>
            <input type="text" class="form-control" id="contactnum" placeholder="Whatsapp Number"
            name="contactnum">
          </div>         
          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" id="stuemail" placeholder="Email"
            name="stuemail">
            <small class="form-text">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="stupass" class="pl-2 font-weight-bold">New Password</label>
            <input type="password" class="form-control" id="stupass" placeholder="Password"
            name="stupass">
          </div>         
        </form>
        <!---------End Student Registration form---------->

     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Clos</button>
        <button type="button" class="btn btn-primary">Sign Up</button>
      </div>
    </div>
  </div>
</div>
<!------END Student registration Modal------------>

<!------Start Student Login Modal------------>
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" 
aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="btn-close" 
        data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <!---------Start Student Login form---------->       
        <form id="stuLoginForm">        
          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="stuLogmail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" id="stuLogmail" placeholder="Email"
            name="stuLogemail">
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" id="stuLogpass" placeholder="Password"
            name="stuLogpass">
          </div>         
        </form>
        <!---------End Student Login form---------->

     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>
<!------END Student Login Modal------------>

<!------Start Admin Login Modal------------>
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" 
aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" 
        data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <!---------Start Admin Login form---------->       
        <form id="adminLoginForm">        
          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="adminLogmail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" id="adminLogmail" placeholder="Email"
            name="adminLogemail">
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" id="adminLogpass" placeholder="Password"
            name="adminLogpass">
          </div>         
        </form>
        <!---------End Admin Login form---------->

     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>
<!------END Admin Login Modal------------>




<!----jquery and Bootstrap Javascript---->
<script src="js/jquery.min.js"></script>
<script src="js/proper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

 <!----Font awesome js---->
<script src="js/all.min.js"></script>

<!----Student Testimonial Owl Slider jS----------->
<script type="text/javascript" src="js/owl.min.js"></script>
<script type="text/javascript" src="js/testyslider.js"></script>

</body>

</html>