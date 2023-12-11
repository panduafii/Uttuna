<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket</title>
    <link href="CSS/paket.css" rel="stylesheet" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
     <!-- import font poppins -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
     <!-- Icon -->
     <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
    
</head>
<body>
<?php
    session_start();
  
    // Cek apakah session user_id dan username telah diset
    if (isset($_SESSION["user_id"]) || isset($_SESSION["username"])) {
      // Jika tidak, redirect ke halaman login
      // Informasi pengguna yang telah login
      $user_id = $_SESSION["user_id"];
      $username = $_SESSION["username"];
      // header("Location: Login1.php");
      // exit();
    }
  ?>  
      <!-- header by pandu -->
      <header>
        <div class="nav-bar">
          <a href="" class="logo"><img src="./img/logo4.png" /></a>
          <div class="navigation">
            <div class="nav-items">
              <i class="uil uil-times nav-close-btn"></i>
              <a href="index.php"><i class="uil uil-home"></i>Home</a>
              <a href="index.php"><i class="uil uil-compass"></i>Destination</a>
              <a href="paket.php"><i class="uil uil-document-layout-left"></i>Explore</a>
              <a href="index.php"><i class="uil uil-info-circle"></i>About Us</a>
              <?php
              // Cek apakah pengguna sudah login
              if (isset($_SESSION['username'])) {
                // Jika sudah login, tampilkan tautan ke profil dan logout
                echo '<a href="fungsiPHP/check-logout.php"><i class="uil uil-sign-out-alt"></i></i>Logout</a>';
                echo '<a class="loginHeader buatJarak" href="profile.php"><img src="gambar\user.svg"><span class="namaPengguna">'.$username.'</span></a>';
              } else {
                // Jika belum login, tampilkan tautan ke halaman login
                 echo '<a class="loginHeader" href="Login1.php"><i class="uil uil-user"></i>Login</a>';
              }
              ?>
            </div>
          </div>
          <i class="uil uil-apps nav-menu-btn"></i>
        </div>
      </header>
      <!-- ==== -->

    <div class="kepala2">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="gambar/bg2.jpg" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Jelajahi pulau di Natuna</h2>
                </div>
              </div>
              <div class="carousel-item">
                <img src="gambar/gbr6.jpg" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Dapatkan pengalaman perjalanan yang menyenangkan</h2>
                </div>
              </div>
              <div class="carousel-item">
                <img src="gambar/gbr3.jpg" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Kunjungi berbagai destinasi wisata</h2>
              </div>
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="kanan">

        </div>
    </div>
    <div class="badan">
      <h1 style="font-size: 50px;">For You Natuna Travel</h1>
      <div class="list"> 
        <?php
          include('fungsiPHP/check-paket.php')
        ?>
      </div>

    </div>
    <footer>
    </footer>
    <script src="js/isipaket.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>