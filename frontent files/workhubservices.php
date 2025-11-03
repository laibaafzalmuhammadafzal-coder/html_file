
  
   
<?php include 'header.php'; ?>
    <!-- HEADER -->
    <section class="header-bg">
      <div class="container text-center">
        <h1 class="fw-bold">All Services</h1>
        <p class="text-muted mt-2">Choose from our wide range of trusted & reliable home services</p>
      </div>
    </section>

    <!-- BREADCRUMB -->
    <div class="container mt-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Services</li>
        </ol>
      </nav>
    </div>

    <!-- CATEGORY FILTER -->
    <div class="container mt-4">
      <div class="d-flex flex-wrap gap-2">
        <button class="btn btn-sm btn-outline-primary" onclick="filterServices('all')">All</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('cleaning')">Cleaning</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('electrician')">Electrician</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('plumbing')">Plumbing</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('painting')">Painter</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Beautician</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Carwash</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Mechanic</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Tailor</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">BabySitter</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Cooking & Catering</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Masonry Services</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Moving & Shifting</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Gardening Services</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Carpenter</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Tutring</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Security Services</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Driver Services</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">IT & Technical Services</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">Event Services</button>

      </div>
    </div>

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
    