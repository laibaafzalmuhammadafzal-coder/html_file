<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkHub — Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
      :root{ --accent:#6f42c1; }
      body{ font-family:Inter,system-ui; background:#fff; }
      .header-bg{ background:linear-gradient(165deg, rgba(111,66,193,.08), rgba(111,66,193,.02)); padding:3.5rem 0; }
      .service-box{ border-radius:.75rem; padding:1.5rem; background:#fff; box-shadow:0 4px 14px rgba(0,0,0,.05); transition:.2s; }
      .service-box:hover{ transform:translateY(-4px); box-shadow:0 6px 20px rgba(0,0,0,.08); }
      .service-box img{ width:100%; height:160px; object-fit:cover; border-radius:.6rem; }
      .breadcrumb a{ text-decoration:none; }
    </style>
  </head>

  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
      <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">WorkHub</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item"><a class="nav-link active" href="HOME PAGE.html">Home</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#categories">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#offers">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#reviews">Register</a></li>
            <li class="nav-item ms-3"><a class="btn btn-outline-primary" href="#">Login</a></li>
            <li class="nav-item ms-2"><a class="btn btn-primary text-white" href="#">Sign Up</a></li>
          </ul>
        </div>
      </div>
    </nav>

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
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('painting')">Painting</button>
        <button class="btn btn-sm btn-outline-secondary" onclick="filterServices('ac')">AC Repair</button>
      </div>
    </div>

    <!-- SERVICES GRID -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4" id="serviceGrid">

          <!-- CLEANING -->
          <div class="col-md-4 service-item" data-cat="cleaning">
            <div class="service-box">
              <img src="https://picsum.photos/seed/clean1/600/400" alt="cleaning">
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
              <img src="https://picsum.photos/seed/clean2/600/400" alt="cleaning2">
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
              <img src="https://picsum.photos/seed/elect1/600/400" alt="electrician">
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
              <img src="https://picsum.photos/seed/plumb1/600/400" alt="plumber1">
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
              <img src="https://picsum.photos/seed/paint1/600/400" alt="painting">
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
              <img src="https://picsum.photos/seed/ac1/600/400" alt="ac repair">
              <h5 class="mt-3">AC Repair & Service</h5>
              <p class="text-muted small">AC gas refill, cooling issues, servicing & repairs.</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0 fw-semibold">PKR 800</p>
                <a href="#" class="btn btn-primary btn-sm">Book Now</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-light py-4">
      <div class="container text-center small text-muted">
        © 2025 WorkHub — All Rights Reserved
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      function filterServices(cat){
        const items=document.querySelectorAll('.service-item');
        items.forEach(i=>{
          if(cat==='all' || i.dataset.cat===cat){ i.style.display='block'; }
          else{ i.style.display='none'; }
        });
      }
    </script>
  </body>
</html>