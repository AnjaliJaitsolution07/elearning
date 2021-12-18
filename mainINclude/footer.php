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