<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;800;900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="CSS/login1.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Icon -->
    
    <!-- Icon -->
  </head>

  <body>
    <!-- menambah header -->
    <header>
      <div class="nav-bar">
        <a href="index.php" class="logo"><img src="./img/logo4.png" /></a>
        <div class="navigation">
          <div class="nav-items">
            <i class="uil uil-times nav-close-btn"></i>
            <a href="index.php"><i class="uil uil-home"></i>Home</a>
            <a href="index.php"><i class="uil uil-compass"></i>Destination</a>
            <a href="paket.php"><i class="uil uil-document-layout-left"></i>Explore</a>
            <a href="index.php"><i class="uil uil-info-circle"></i>About Us</a>
            <a class="loginHeader" href="Login1.php"><i class="uil uil-user"></i>Login</a>
          </div>
        </div>
        <i class="uil uil-apps nav-menu-btn"></i>
      </div>
    </header>
    <!-- LOGIN -->
    <div class="wrapper">
      <div class="form-box login">
        <h2>Login</h2>
        <!-- Form -->
        <!-- jangan lupa ganti actionnya -->
        <form action="fungsiPHP/check-login.php" method="post">
          <!-- Username -->
          <div class="input-box">
            <span class="icon"><ion-icon name="people"></ion-icon></span>
            <input type="text" id="username" name="username" required />
            <label for="username">Username</label>
          </div>
          <!-- Password -->
          <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="Password" id="password" name="password" required />
            <label for="password">Password</label>
          </div>
          <?php
            // Tampilkan pesan error jika parameter GET 'error' ada
            if (isset($_GET['error'])) {
            echo "<p style='color: white; font-size: 12px'>*Username atau password salah</p>";
            }
          ?>
          <!-- Submit Button -->
          <input class="button" type="submit" value="Sign In" name="submit">

          <div class="login-register">
            <p>
              Don't have an account?<a href="#" class="register-link">
                Register</a
              >
            </p>
          </div>
          
        </form>
      </div>

      <!-- REGISTER -->
      <div class="form-box register">
        <h2>Register</h2>
        <!-- Form -->
        <!-- jangan lupa ganti actionnya -->
        <form class="formDalam" action="fungsiPHP/check-regist.php" method="post">
          <!-- Input Form -->
          <!-- Username -->
          <div class="input-box">
            <span class="icon"><ion-icon name="people"></ion-icon></span>
            <input type="text" required id="username2" name="username"/>
            <label for="username2">Username</label>
          </div>
          <!-- Phone -->
          <div class="input-box">
            <span class="icon"><ion-icon name="call"></ion-icon></span>
            <input type="phone" required id="phone" name="notelp_pengguna"/>
            <label for="phone">Phone Number</label>
          </div>
          <!-- Email -->
          <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="email" required id="email" name="email"/>
            <label for="email">Email</label>
          </div>
          <!-- Password -->
          <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="Password" required id="password2" name="password"/>
            <label for="password2">Password</label>
          </div>

          <!-- Submit Button -->
          <button  type="submit" class="button">Register</button>

          <div class="login-register">
            <p>
              Already have an account?<a href="#" class="login-link"> Login</a>
            </p>
          </div>
        </form>
      </div>
    </div>

    <!-- import js -->
    <script src="js/script.js"></script>
    <!-- Import Icon -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
  <script></script>
</html>
