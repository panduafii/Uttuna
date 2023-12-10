<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="./CSS/profile.css"/>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;800;900&display=swap" rel="stylesheet">

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
      
      // Informasi pengguna yang telah login
      $user_id = $_SESSION["user_id"];
      $username = $_SESSION["username"];
    }
    include("fungsiPHP/check-profile.php");
    ?>
    <!-- header by pandu -->
      <header>
        <div class="nav-bar">
          <a href="index.php" class="logo"><img src="./img/logo5.png" /></a>
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
    <!-- Atas -->
    <div class="atas">
        <h1>WONDERFUL NATUNA</h1>
    </div>

    <!-- Bawah -->
    <div class="bawah">
        <div class="header">
            <h1><ion-icon name="person"></ion-icon> Account Settings</h1>
        </div>
        <div class="isi">
            <!-- <h4><ion-icon name="create"></ion-icon> Edit your profile</h4> -->
            <form action="fungsiPHP/update-profile.php" method="post">
                <!-- Input Form -->
                <!-- Username -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="people"></ion-icon></span>
                    <input type="text" id="username" name="username" value="<?php echo $uname; ?>" required>
                    <label for="username">Username</label>
                </div>

                <!-- Phone -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                    <label for="phone">Phone Number</label>
                </div>

                <!-- Email -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" name="email" value="<?php echo $eml; ?>" required>
                    <label for="email">Email</label>
                </div>

                <!-- Password -->
                <!-- <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" name="password" value="<?php echo $pwd; ?>" required>
                    <label for="Password">Password</label>
                </div> -->

                <!-- Submit Button -->
                <button type="submit" class="button">Save Changes</button>
            </form>
        </div>

    <!-- Import Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/profile.js"></script>

    </div>
</body>