<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkHub</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
      .navbar-nav li{
        margin-right: 20px;
        font-size: 18px;
        font-weight: bold;
      }

      /* Mega Menu */
      .mega-hover { position: relative; }
      .mega-hover .mega-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        max-width: 1200px;
        background: #fff;
        padding: 20px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        z-index: 2000;
      }

      @media(min-width: 992px){
        .mega-hover:hover .mega-menu { display: flex; }
      }

      .mega-hover.open .mega-menu {
        display: block;
        position: relative;
        transform: none;
        width: 100%;
        box-shadow: none;
      }
    </style>

</head>

<body>

<!-- ✅ NAVBAR START -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <a class="navbar-brand" href="home.php">
       <img src="workhublogo.jpg" style="height: 50px;">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">

      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>

        <li class="nav-item dropdown mega-hover">
          <a class="nav-link" href="services.php" id="servicesMenu">Services</a>

          <!-- ✅ Mega Menu -->
          <div class="mega-menu bg-white p-4 shadow">
            <?php include "mega-menu.php"; ?>
          </div>

        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login / Signup
          </a>
        </li>

      </ul>

    </div>
  </div>
</nav>
<!-- ✅ NAVBAR END -->

<!-- ✅ Mega Menu (Mobile Toggle Script) -->
<script>
const servicesMenu = document.getElementById('servicesMenu');
if(servicesMenu){
  const parentLi = servicesMenu.closest('.mega-hover');

  servicesMenu.addEventListener('click', function(e){
    if(window.innerWidth <= 991){
      e.preventDefault();
      parentLi.classList.toggle('open');
    }
  });
}
</script>
