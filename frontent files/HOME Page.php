
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
<!-- SERVICES GRID -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4" id="serviceGrid">

          <!-- CLEANING -->
          <div class="col-md-4 service-item" data-cat="cleaning">
            <div class="service-box">
              <img src="plumber.jpg" alt="cleaning">
              <h5 class="mt-3">Home Cleaning</h5>
              <p class="text-muted small">General, deep, and move-out cleaning packages.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 1500</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 service-item" data-cat="cleaning">
            <div class="service-box">
              <img src="electrition.jpg" alt="cleaning2">
              <h5 class="mt-3">Sofa Cleaning</h5>
              <p class="text-muted small">Professional shampoo wash for sofa sets.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 1200</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

          <!-- ELECTRICIAN -->
          <div class="col-md-4 service-item" data-cat="electrician">
            <div class="service-box">
              <img src="carwash.jpg" alt="electrician">
              <h5 class="mt-3">Electrician</h5>
              <p class="text-muted small">Switches, wiring, lights installation & repairs.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 800</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

          <!-- PLUMBING -->
          <div class="col-md-4 service-item" data-cat="plumbing">
            <div class="service-box">
              <img src="carmachanic.jpg" alt="plumber1">
              <h5 class="mt-3">Plumbing Services</h5>
              <p class="text-muted small">Leaks, pipe fitting, taps, blockages and repairs.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 1000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

          <!-- AC REPAIR -->
          <div class="col-md-4 service-item" data-cat="ac">
            <div class="service-box">
              <img src="cook.jpg" alt="ac repair">
              <h5 class="mt-3">AC Repair & Service</h5>
              <p class="text-muted small">AC gas refill, cooling issues, servicing & repairs.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 800</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


          <!-- PAINTING -->
          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 service-item" data-cat="painting">
            <div class="service-box">
              <img src="baby.jpg" alt="painting">
              <h5 class="mt-3">Home Painting</h5>
              <p class="text-muted small">Interior & exterior painting by trained workers.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 5000</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
<?php include 'footer.php'; ?>

