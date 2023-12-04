<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/paket.css">
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
              <a href="#"><i class="uil uil-document-layout-left"></i>Explore</a>
              <a href="index.php"><i class="uil uil-info-circle"></i>About Us</a>
              <?php
              // Cek apakah pengguna sudah login
              if (isset($_SESSION['username'])) {
                // Jika sudah login, tampilkan tautan ke profil dan logout
                echo '<a href="profile.php"><i class="uil uil-user"></i>Profile</a>';
                echo '<a href="fungsiPHP/check-logout.php"><i class="uil uil-sign-out-alt"></i></i>Logout</a>';
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
        <a href="isipaket.php">
          <div class="paket">
          
            <div class="hari"><img src="gambar/clock.png" alt=""><span> 3 Hari</span></div>
            <div class="harga"><b>Rp10.000.000</b></div>
            <div class="lokasi">Pantai Tanjung, Teluk Buton, Pantai Selo</div>
            <img class="g1" src="gambar/gbr2.jpg" />
            <img class="g2" src="gambar/gbr3.jpg" />
            <img class="g3" src="gambar/gbr4.jpg" />
          </div>
        </a>
        <a href="isipaket.php">
          <div class="paket">
          
            <div class="hari"><img src="gambar/clock.png" alt=""><span> 5 Hari</span></div>
            <div class="harga"><b>Rp5.000.000</b></div>
            <div class="lokasi">Batu Kasah, Adiwana Resort, Pelabuhan Penangi</div>
            <img class="g1" src="gambar/gbr6.jpg" />
            <img class="g2" src="gambar/gbr7.jpg" />
            <img class="g3" src="gambar/gbr3.jpg" />
          </div>
        </a>
        <a href="isipaket.php">
          <div class="paket">
          
            <div class="hari"><img src="gambar/clock.png" alt=""><span> 7 Hari</span></div>
            <div class="harga"><b>Rp7.000.000</b></div>
            <div class="lokasi">Teluk Depeh, Pulau Sahi, Natuna Dive Resort, Pulau Senoa</div>
            <img class="g1" src="gambar/gbr4.jpg" />
            <img class="g2" src="gambar/gbr5.jpg" />
            <img class="g3" src="gambar/gambar4.jpg" />
          </div>
        </a>
        <a href="isipaket.php">
          <div class="paket">
          
            <div class="hari"><img src="gambar/clock.png" alt=""><span> 4 Hari</span></div>
            <div class="harga"><b>Rp3.500.000</b></div>
            <div class="lokasi">Teluk Depeh, Batu Kasah, Natuna Dive Resort</div>
            <img class="g1" src="gambar/gbr5.jpg" />
            <img class="g2" src="gambar/gambar5.jpg" />
            <img class="g3" src="gambar/gbr2.jpg" />
          </div>
        </a>
        <a href="isipaket.php">
          <div class="paket">
          
            <div class="hari"><img src="gambar/clock.png" alt=""><span> 3 Hari</span></div>
            <div class="harga"><b>Rp2.000.000</b></div>
            <div class="lokasi">Pulau Senoa, Pantai Tanjung, Pelabuhan Pelangi, Batu Kasah</div>
            <img class="g1" src="gambar/gbr6.jpg" />
            <img class="g2" src="gambar/gambar6.jpg" />
            <img class="g3" src="gambar/gbr3.jpg" />
          </div>
        </a>
        <a href="isipaket.php">
          <div class="paket">
          
            <div class="hari"><img src="gambar/clock.png" alt=""><span> 5 Hari</span></div>
            <div class="harga"><b>Rp8.500.000</b></div>
            <div class="lokasi">Pantai Selo, Natuna Dive Resort, Pulau Sahi</div>
            <img class="g1" src="gambar/gbr4.jpg" />
            <img class="g2" src="gambar/gbr5.jpg" />
            <img class="g3" src="gambar/gbr6.jpg" />
          </div>
        </a>
        <a href="isipaket.php">
          <div class="paket">
          
            <div class="hari"><img src="gambar/clock.png" alt=""><span> 6 Hari</span></div>
            <div class="harga"><b>Rp6.000.000</b></div>
            <div class="lokasi">Stone Park, Adiwana Resort, Pelabuhan Pelangi</div>
            <img class="g1" src="gambar/gbr5.jpg" />
            <img class="g2" src="gambar/gbr4.jpg" />
            <img class="g3" src="gambar/gbr3.jpg" />
          </div>
        </a>
        
      </div>

    </div>
    <footer>
    </footer>
    <script src="./js/isipaket.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>