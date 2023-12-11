<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Paket</title>

    <!-- bootstrap
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="./CSS/isipaket.css">
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
    <div class="kepala1">
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

    </div>
    <div class="badan">
      <!-- <h1 style="font-size: 50px;">Jelajahi lebih dalam</h1><br> -->
      
      <?php
        include('fungsiPHP/check-isipaket.php')
      ?>

    </div> 
    <footer>
    </footer>
    <div class="overlay" id="overlay"></div>
  <script>
      document.addEventListener('DOMContentLoaded', function() {
      // Temukan tombol bayar
      var btnBayar = document.getElementById('showPopupBtn');

      // Tambahkan event listener untuk menanggapi klik tombol
      btnBayar.addEventListener('click', function() {
        // Cek apakah pengguna sudah login
        <?php if (isset($_SESSION['username'])) : ?>
          // Jika sudah login, tampilkan pop-up bayar atau lakukan tindakan lainnya
          // Misalnya, tampilkan pesan sederhana sebagai contoh
          
        <?php else : ?>
          // Jika belum login, arahkan ke halaman login
          window.location.href = 'Login1.php';
          alert('Silahkan Login terlebih dahulu');
        <?php endif; ?>
      });
    });
  </script>
      <div class="popup" id="myPopup">
          <div class="popup-content">
              <span class="close" id="closePopupBtn">&times;</span>
              <h4><b>Pilih Metode Pembayaran</b></h4><br>
              <form action="fungsiPHP/insert-history.php" method="post">
                  <label for="kk">
                      <input type="radio" name="p" id="kk">
                      <img src="gambar/credit-cards.png" alt="">
                      Kartu Kredit/Debit
                      
                  </label><br>
                  
                  <label for="kd">
                      <input type="radio" name="p" id="kd">
                      <img src="gambar/transfer.png" alt="">
                      Transfer Bank
                      
                  </label><br>
                  
                  <label class="emoney" for="d">
                      <input type="radio" name="p" id="d">
                      <img src="gambar/e-money2.png" alt="">
                      E-Money
                      
                  </label><br>
                  <input class="nomor" type="text" placeholder=" nomor"><br>
                  <input class="sandi" type="password" placeholder=" sandi"><br>
                  <select class="jumlahorang" id="jumlah">
                      <option value="1">1 Orang</option>
                      <option value="2">2 Orang</option>
                      <option value="3">3 Orang</option>
                      <option value="4">4 Orang</option>
                      <option value="5">5 Orang</option>
                      <option value="6">6 Orang</option>
                      <option value="7">7 Orang</option>
                      <option value="8">8 Orang</option>
                      <option value="9">9 Orang</option>
                      <option value="10">10 Orang</option>
                  </select>
                  <span class="harga2">
                    <?php
                      echo '<b>Rp. ' . number_format($row["harga_paket"]) . '</b>';
                    ?>
                  </span>
                  <?php
                    echo '<a class="tombol" href="fungsiPHP/insert-history.php?id=' . $row["id_paket"] . '" class="btn-bayar">Bayar</a>';
                  ?>
              </form>
          </div>
      </div> 

    <script src="./js/isipaket.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>