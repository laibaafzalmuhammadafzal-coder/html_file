
  <?php include 'header.php'; ?>
    <!-- slider-start -->
<!-- ✅ HERO BANNER START -->
<div class="position-relative">

  <!-- Background Image -->
  <img src="home.jpg" class="img-fluid w-100" style="height: 500px; object-fit: cover;">

  <!-- Hero text box on the image -->
  <div class="position-absolute top-50 start-50 translate-middle text-center text-white">

    <h2 class="fw-bold">Find Trusted Services Near You</h2>
    <p class="mb-4">Hire professionals or register as a service provider</p>

    <!-- Buttons -->
    <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#serviceModal">
      Hire a Service
    </button>

    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#employeeModal">
      Register as Employee
    </button>

  </div>
</div>
<!-- ✅ HERO BANNER END -->

<!-- ✅ SERVICE FORM MODAL -->
<div class="modal fade" id="serviceModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Hire a Service</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form>

          <div class="mb-3">
            <label class="form-label">Your Name:</label>
            <input type="text" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Service Needed:</label>
            <input type="text" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Location:</label>
            <input type="text" class="form-control" required>
          </div>

          <button type="submit" class="btn btn-primary w-100">Submit Request</button>

        </form>
      </div>

    </div>
  </div>
</div>
<!-- ✅ SERVICE FORM MODAL END -->
<!-- ✅ EMPLOYEE REGISTRATION MODAL -->
<!-- ✅ EMPLOYEE FORM MODAL -->
<div class="modal fade" id="employeeModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header bg-warning">
        <h5 class="modal-title">Register as Employee</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form>

          <div class="mb-3">
            <label class="form-label">Your Name:</label>
            <input type="text" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Skill / Profession:</label>
            <input type="text" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Experience (Years):</label>
            <input type="number" class="form-control" required>
          </div>

          <button type="submit" class="btn btn-warning w-100">Register</button>

        </form>
      </div>

    </div>
  </div>
</div>
<!-- ✅ EMPLOYEE FORM MODAL END -->
    <!-- slider-end -->
     <!-- ✅ LOGIN / SIGNUP POPUP -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 18px; overflow:hidden;">

      <!-- HEADER -->
      <div class="modal-header" style="background:#074fa0; color:white;">
        <h4 class="modal-title" id="modalTitle">Login</h4>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- BODY -->
      <div class="modal-body">

        <!-- ✅ LOGIN FORM -->
        <div id="loginBox">
          <input type="text" class="form-control mb-3" placeholder="Email or Phone">
          <input type="password" class="form-control mb-3" placeholder="Password">

          <button class="btn w-100 mb-3" style="background:#074fa0; color:white;">Login</button>

          <p class="text-center">Don't have an account?
            <a href="#" onclick="showSignup()" style="color:#074fa0; font-weight:bold;">Sign Up</a>
          </p>
        </div>

        <!-- ✅ SIGNUP FORM -->
        <div id="signupBox" style="display:none;">
          <input type="text" class="form-control mb-3" placeholder="Full Name">
          <input type="email" class="form-control mb-3" placeholder="Email">
          <input type="text" class="form-control mb-3" placeholder="Phone Number">
          <input type="password" class="form-control mb-3" placeholder="Create Password">
          <input type="password" class="form-control mb-3" placeholder="Confirm Password">

          <button class="btn w-100 mb-3" style="background:#f9c80e; color:black;">Create Account</button>

          <p class="text-center">Already have an account?
            <a href="#" onclick="showLogin()" style="color:#074fa0; font-weight:bold;">Login</a>
          </p>
        </div>

      </div>

    </div>
  </div>
</div>


<!-- ✅ SERVICES SECTION (Bootstrap Version) -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center text-white mb-4">Our Services</h2>

    <div class="row g-4">

      <!-- ✅ SERVICE CARD TEMPLATE -->
      <!-- Each service is inside col-md-4 (3 per row) -->

      <div class="col-md-4 col-sm-6">
        <div class="card bg-dark text-white border-0 shadow">
          <img src="plumberr.jpg" class="card-img-top" alt="Plumber">
          <div class="card-body">
            <h5 class="card-title">Plumber</h5>
            <p class="card-text">Expert plumbing solutions for taps, pipes and bathroom fittings.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card bg-dark text-white border-0 shadow">
          <img src="electritionn.jpg" class="card-img-top" alt="Electrician">
          <div class="card-body">
            <h5 class="card-title">Electrician</h5>
            <p>Professional wiring, fan repair, and switchboard installation.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card bg-dark text-white border-0 shadow">
          <img src="cleanerr.jpg" class="card-img-top" alt="Cleaner">
          <div class="card-body">
            <h5>Cleaner</h5>
            <p>Reliable cleaning services for homes, offices, and shops.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card bg-dark text-white border-0 shadow">
          <img src="be.jpg" class="card-img-top" alt="Beautician">
          <div class="card-body">
            <h5>Beautician</h5>
            <p>Makeup, facial, and hairstyle services at your doorstep.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card bg-dark text-white border-0 shadow">
          <img src="carwashh.jpg" class="card-img-top" alt="Car Wash">
          <div class="card-body">
            <h5>Car Wash</h5>
            <p>Quick and affordable car wash service with doorstep facility.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card bg-dark text-white border-0 shadow">
          <img src="machanic.jpg" class="card-img-top" alt="Mechanic">
          <div class="card-body">
            <h5>Mechanic</h5>
            <p>Trusted mechanic services for cars, bikes, and repairs.</p>
          </div>
        </div>
      </div>

      <!-- ✅ Continue same pattern for all services -->

      <div class="col-md-4 col-sm-6">
        <div class="card bg-dark text-white border-0 shadow">
          <img src="tailorr.jpg" class="card-img-top" alt="Tailor">
          <div class="card-body">
            <h5>Tailor</h5>
            <p>Perfect stitching and alterations for men and women.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card bg-dark text-white border-0 shadow">
          <img src="babyy.jpg" class="card-img-top" alt="Babysitter">
          <div class="card-body">
            <h5>Babysitter</h5>
            <p>Trained babysitters to take care of your little ones safely.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card bg-dark text-white border-0 shadow">
          <img src="cookk.jpg" class="card-img-top" alt="Cooking">
          <div class="card-body">
            <h5>Cooking & Catering</h5>
            <p>Delicious homemade food and catering for events and parties.</p>
          </div>
        </div>
      </div>

      <!-- ✅ Keep adding till last service... same pattern -->

    </div>
  </div>
</section>
<?php include 'footer.php'; ?>

