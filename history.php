<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>

    <!-- CSS -->
    <link href="CSS/history.css" rel="stylesheet" >

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
     <!--  -->

     <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
    <!--  -->
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
    <main class ="table">
        <section class= "table_header"> 
            <h1>Transaction History</h1>
        </section>
        <section class="table_body">
            <table>
                <thead>
                    <tr>
                        <th> ID Paket </th>
                        <th> Harga </th>
                        <th> Destinasi </th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    include "fungsiPHP/check-history.php"
                  ?>
                </tbody>
            </table>
    </main>
  

    <script src="js/history.js"></script>
</body>
</html>