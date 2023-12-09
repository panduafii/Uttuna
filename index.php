<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="CSS/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="./CSS/destination.css" />
    <link rel="stylesheet" href="./CSS/aboutUs.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"/>
    <link rel="stylesheet" href="CSS/swiper-bundle.min.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- Font Alfath -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700&family=Vollkorn:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font -->
    <!-- Icon Alfath -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <!--Icon  -->

    <title>Home</title>
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
    ?>
    <container>
      <header>
        <div class="nav-bar">
          <a href="" class="logo"><img src="./img/logo4.png" /></a>
          <div class="navigation">
            <div class="nav-items">
              <i class="uil uil-times nav-close-btn"></i>
              <a href="#"><i class="uil uil-home"></i>Home</a>
              <a href="#about2"><i class="uil uil-compass"></i>Destination</a>
              <a href="paket.php"><i class="uil uil-document-layout-left"></i>Explore</a>
              <a href="#about3"><i class="uil uil-info-circle"></i>About Us</a>
              <?php
              // Cek apakah pengguna sudah login
              if (isset($_SESSION['username'])) {
                // Jika sudah login, tampilkan tautan ke profil dan logout
                echo '<a href="fungsiPHP/check-logout.php"><i class="uil uil-sign-out-alt"></i></i>Logout</a>';
                echo '<a class="loginHeader" href="profile.php"><img src="gambar\user.svg">'.$username.'</a>';
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

      <section class="home">
        <!-- <div class="media-icons">
          <a href=""><i class="uil uil-facebook-f"></i></a>
          <a href=""><i class="uil uil-instagram"></i></a>
          <a href=""><i class="uil uil-twitter"></i></a> -->
        </div>

        <div class="swiper bg-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="img/gbr1.jpg" alt="" />
              <div class="text-content">
                <h2 class="title">Uttuna<span></span></h2>
                <p>
                  Jelajah destinasi wisata tapi tempatnya itu itu aja? Kami
                  menyediakan berbagai pilihan untukmu! Kenapa tidak coba ke
                  ujung utara saja? disana ada Natuna
                </p>
                <button class="read-btn" onclick="window.location.href='paket.php'">
                  Lets go <i class="uil uil-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="swiper-slide dark-layer">
              <img src="img/gbr2.jpg" alt="" />
              <div class="text-content">
                <h2 class="title">Uttuna<span></span></h2>
                <p>
                  Keajaiban Pulau Natuna Selamat datang di destinasi ajaib yang
                  tersembunyi di Indonesia, Pulau Natuna! Dikelilingi oleh
                  keindahan alam yang luar biasa, Natuna menawarkan pesona laut
                  biru yang jernih, pantai pasir putih yang memikat, dan
                  kehidupan bawah laut yang mengagumkan. Jelajahi keindahan
                  taman laut yang kaya, bersnorkeling di terumbu karang
                  warna-warni, dan nikmati matahari terbenam yang memukau di
                  sepanjang garis pantai. Natuna tidak hanya destinasi
                  pariwisata, tetapi juga surga yang menanti untuk dijelajahi
                </p>
                <button class="read-btn" onclick="window.location.href='paket.php'">
                  Lets go <i class="uil uil-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="swiper-slide dark-layer">
              <img src="img/gbr7.jpg" alt="" />
              <div class="text-content">
                <h2 class="title">Uttuna<span></span></h2>
                <p>
                  Natuna tidak hanya dikenal karena kecantikan alamnya, tetapi
                  juga karena keanekaragaman budayanya yang kaya. Sambutlah
                  keramahan penduduk setempat yang ramah, dan temukan
                  tradisi-tradisi unik mereka melalui festival dan pertunjukan
                  lokal. Dalam perjalanan Anda, jangan lewatkan kesempatan untuk
                  mencicipi kuliner khas Natuna, yang memadukan cita rasa lezat
                  dengan bahan-bahan segar dari laut dan daratan.
                </p>
                <button class="read-btn" onclick="window.location.href='paket.php'">
                  Lets go <i class="uil uil-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="swiper-slide dark-layer">
              <img src="./images/GambarHome4.png " alt="" />
              <div class="text-content">
                <h2 class="title">Uttuna<span></span></h2>
                <p>
                  Bagi para petualang sejati, Natuna menyediakan pulau-pulau
                  terpencil yang menantang untuk dijelajahi. Trekking melalui
                  hutan belantara yang subur, menikmati pemandangan panorama
                  dari puncak bukit, atau berkemah di tepi pantai yang sunyi
                  adalah pengalaman yang tak terlupakan di Natuna. Pulau-pulau
                  terpencil ini memungkinkan Anda untuk terhubung secara
                  langsung dengan alam dan menikmati ketenangan yang sulit
                  ditemukan di tempat lain.
                </p>
                <button class="read-btn" onclick="window.location.href='paket.php'">
                  Lets go <i class="uil uil-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="swiper-slide dark-layer">
              <img src="img/gbr17.jpg" alt="" />
              <div class="text-content">
                <h2 class="title">Uttuna<span></span></h2>
                <p>
                  Natuna memegang teguh prinsip ekowisata yang bertanggung
                  jawab. Kami berkomitmen untuk melestarikan keindahan alam dan
                  keanekaragaman hayati di wilayah ini. Dukung upaya pelestarian
                  kami dengan ikut serta dalam kegiatan-kegiatan lingkungan,
                  seperti penanaman pohon, pembersihan pantai, dan pengamatan
                  satwa liar. Dengan bersatu tangan, kita dapat menjaga Natuna
                  tetap indah untuk generasi mendatang.
                </p>
                <button class="read-btn" onclick="window.location.href='paket.php'">
                  Lets go <i class="uil uil-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="swiper-slide dark-layer">
              <img src="img/gbr18.jpg" alt="" />
              <div class="text-content">
                <h2 class="title">Uttuna<span></span></h2>
                <p>
                  Nikmati kenyamanan dan keindahan sekaligus dengan akomodasi
                  yang berkualitas di Natuna. Berbagai pilihan penginapan, mulai
                  dari resort mewah hingga homestay yang ramah, menyediakan
                  fasilitas modern yang memanjakan pengunjung. Bangun dengan
                  pemandangan laut yang menakjubkan, dan lepaskan penat dengan
                  suasana damai pulau yang menenangkan. Natuna menawarkan
                  liburan yang tak terlupakan bagi semua jenis wisatawan.
                </p>
                <button class="read-btn" onclick="window.location.href='paket.php'">
                  Lets go <i class="uil uil-arrow-right"></i>
                </button>
              </div>
            </div>
            <!-- <div class="swiper-slide dark-layer">
                        <img src="images/GambarHome7.png" alt=""/>
                            <div class="text-content">
                                <h2 class="title">Uttuna<span>003</span></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, 
                                    repellendus doloribus quisquam iste, nemo culpa corporis debitis quam,
                                    natus quasi tempora sequi amet itaque nulla repudiandae. Eius earum eligendi dolorum!
                                </p>
                                <button class="read-btn" action="paket.php">Lets go <i class="uil uil-arrow-right"></i></button>
                            </div>
                    </div> -->
            <div class="swiper-slide dark-layer">
              <img src="img/gbr19.jpg" alt="" />
              <div class="text-content">
                <h2 class="title">Uttuna<span></span></h2>
                <p>
                  Natuna bukan hanya destinasi wisata yang eksotis tetapi juga
                  menjadi jembatan budaya yang menghubungkan kekayaan Timur dan
                  Barat. Terletak strategis di jalur pelayaran internasional,
                  Natuna telah menjadi pusat pertemuan berbagai budaya dari
                  berbagai belahan dunia. Ini tercermin dalam seni, musik, dan
                  tradisi lokal yang mencerminkan perpaduan harmonis antara
                  warisan maritim dan pengaruh luar. Selamatkan momen dengan
                  berfoto di titik temu Garis Khatulistiwa, mengingatkan kita
                  pada letak geografis yang unik dan menakjubkan Natuna sebagai
                  tempat yang unik dan semakin terkenal sebagai destinasi wisata
                  penuh inspirasi.
                </p>
                <button class="read-btn" onclick="window.location.href='paket.php'">
                  Lets go <i class="uil uil-arrow-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-slider-thumbs">
          <div class="swiper-wrapper thumbs-container">
            <img src="./img/gbr1.jpg" class="swiper-slide" alt="" />
            <img src="./img/gbr2.jpg" class="swiper-slide" alt="" />
            <img src="./img/gbr7.jpg" class="swiper-slide" alt="" />
            <img src="./images/GambarHome4.png" class="swiper-slide" alt="" />
            <img src="./img/gbr17.jpg" class="swiper-slide" alt="" />
            <img src="./img/gbr18.jpg" class="swiper-slide" alt="" />
            <!-- <img src="images/GambarHome7.png" class="swiper-slide" alt=""> -->
            <img src="./img/gbr19.jpg" class="swiper-slide" alt="" />
          </div>
        </div>
      </section>

      <!--  -->
      <section class="about section">
        <h2><i class="uil uil-map"></i> Natuna</h2>
        <div class="cont-about">
          <div>
            <img  class="petaNatuna" src="./images/peta-natuna.png">
          </div>
          <div class="deskAbout">
            <span>     Natuna, bagian yang menakjubkan dari Provinsi Kepulauan Riau, Indonesia, merangkum sejarah dan keindahan alam yang memikat. Seiring berkembangnya waktu, pulau ini telah menjadi destinasi wisata yang diminati, menarik minat baik dari para pelancong lokal maupun internasional. Penduduk setempat, dengan keramahan dan keanekaragaman budayanya, memberikan sentuhan unik pada pengalaman setiap pengunjung.<br><br> &nbsp;&nbsp;&nbsp;&nbsp; Pemerintah Natuna memfokuskan upaya mereka untuk melestarikan keindahan alam pulau ini, dan partisipasi aktif dalam pelestarian lingkungan adalah inti dari prinsip ekowisata yang dipegang teguh dan menjadi bagian dari petualangan tak terlupakan di Pulau Natuna, di mana setiap momen adalah peluang untuk menciptakan kenangan yang abadi. Selamat menikmati keindahan pulau ini, di mana kebahagiaan datang dalam bentuk ombak yang pelan, matahari terbenam yang mempesona, dan senyum ramah penduduk Natuna yang selalu menyambut dengan hangat.
            </span>
          </div>
        </div>
        
        <!-- <div class="cont-about bawah">
          <div class="gambarAbout">
            <img   src="./images/Lambang_Kabupaten_Natuna.png">
          </div>
          
          <span>            Logo Natuna memvisualisasikan keunikan dan keindahan pulau tersebut melalui elemen-elemen yang dipilih dengan hati-hati. Logo ini mencerminkan harmoni antara kekayaan alam, keanekaragaman budaya, dan keramahan masyarakat Natuna.

            Di tengah logo, terdapat gambar pulau yang melambangkan lokasi geografis Natuna di Laut Cina Selatan. Pulau tersebut dikelilingi oleh ombak yang menandakan keindahan laut di sekitarnya. Warna biru yang mendominasi simbol ini tidak hanya menciptakan nuansa kesegaran, tetapi juga merepresentasikan kekayaan ekosistem bawah laut yang memukau.Di sekitar pulau, terdapat elemen-elemen seperti daun kelapa dan ikan, mencerminkan kehidupan laut yang melimpah dan kekayaan alam yang dimiliki Natuna. Daun kelapa memberikan sentuhan tropis, sedangkan ikan menunjukkan potensi pariwisata bawah laut yang menarik wisatawan pecinta alam.
            
            Selain itu, bentuk melingkar pada logo menciptakan kesan kesatuan dan persatuan antara alam dan budaya. Tulisan "Natuna" yang tersemat dengan gaya tipografi yang unik menambahkan elemen modern dan kesan profesional pada logo tersebut. Dengan keseluruhan desainnya, logo Natuna bukan hanya sebuah gambar, tetapi juga sebuah cerita visual tentang keindahan alam, keragaman budaya, dan sambutan hangat masyarakat Natuna. Logo ini menjadi identitas yang kuat dan mengundang untuk menjelajahi keajaiban pulau ini.</span>

        </div> -->
      </section>

      <!-- Destination -->
      <section id="about2" class="about2 section">
        <div class="containerA">
          <div id="slide">
            <div class="item" style="background-image: url(img/gbr1.jpg)">
              <div class="content">
                <div class="name">Pantai Tanjung</div>
                <div class="des">
                  Pantai Tanjung adalah salah satu pantai indah di Natuna,
                  pantai yang memiliki ciri khas pasir putih dan air laut yang
                  membiru
                </div>
              </div>
            </div>
            <div class="item" style="background-image: url(img/gbr2.jpg)">
              <div class="content">
                <div class="name">Teluk Buton</div>
                <div class="des">
                  Butuh pemandangan pantai dari tebing tinggi nan indah? Teluk
                  Buton adalah jawabannya, sebuah bukit yang mengarah langsung
                  ke laut lepas yang indah.
                </div>
              </div>
            </div>
            <div class="item" style="background-image: url(img/gbr3.jpg)">
              <div class="content">
                <div class="name">Pantai Selo</div>
                <div class="des">
                  Pantai Selo bukan hanya sebuah nama pantai biasa, nama selo
                  diambil dari bahasa "Selow" sangat cocok buat kamu yang butuh
                  selow and chill.
                </div>
              </div>
            </div>
            <div class="item" style="background-image: url(img/gbr4.jpg)">
              <div class="content">
                <div class="name">Batu Kasah</div>
                <div class="des">
                  Salah satu destinasi wisata geopark yang menjadi pilihan
                  ketika kamu ingnin melihat pemandangan batu indah di hias
                  dengan hamparan laut yang biru.
                </div>
              </div>
            </div>
            <div class="item" style="background-image: url(img/gbr5.jpg)">
              <div class="content">
                <div class="name">Pulau Senoa</div>
                <div class="des">
                  Melipir sedikit dari kota Ranai dengan menggunakan boat selama
                  30 menit, anda akan menemukan pullau indah berpasir putih,
                  segera nikmati pulau ini sambil meminum air kelapa.
                </div>
              </div>
            </div>
            <div class="item" style="background-image: url(img/gbr6.jpg)">
              <div class="content">
                <div class="name">Natuna Dive Resort</div>
                <div class="des">
                  Natuna menyimpan banyak keindahan bawah laut, diving dan
                  snorkeling adalah pilihan tepat untuk menikmati pemandangan
                  indah bawah laut Natuna.
                </div>
              </div>
            </div>
            <div class="item" style="background-image: url(img/gbr9.jpg)">
              <div class="content">
                <div class="name">Pulau Sahi</div>
                <div class="des">
                  Sebuah pulau kecil yang tidak berpenghuni yang memiliki
                  keindahan pasir putih serta terletak ditengah lautan biru yang
                  indah.
                </div>
              </div>
            </div>
            <div class="item" style="background-image: url(img/gbr8.jpg)">
              <div class="content">
                <div class="name">Teluk Depeh</div>
                <div class="des">
                  Bukit kapur yang memiliki pemandangan langsung kearah lepas
                  pantai dan laut biru yang Indah, paling cocok buat kamu yang
                  pengen nikmatin sore ditemenin sama sunset yang indah.
                </div>
              </div>
            </div>
            <div class="item" style="background-image: url(img/gbr14.jpg)">
              <div class="content">
                <div class="name">Pelabuhan Penagi</div>
                <div class="des">
                  Tidak hanya pantai dan sunset yang berjodoh namun pelabuhan
                  dan sunset juga bisa bersama, di pelabuhan ini sunset bisa
                  terlihat jelas dan sangat indah.
                </div>
              </div>
            </div>
            <div class="item" style="background-image: url(img/gbr13.jpg)">
              <div class="content">
                <div class="name">Adiwana Resort</div>
                <div class="des">
                  Adiwana merupakan salah satu resort yang ada di Natuna, sebuah
                  bangunan dengan gaya modern yang dilapisi dengan batu keramik.
                  Akan membuat liburanmu di Natuna semakin berkesan.
                </div>
              </div>
            </div>
          </div>
          <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
          </div>
        </div>
      </section>
      <!-- About Us fath -->

      <!-- <section class="jumbotron">
            <div class="heading">
            <h1 class="name">Quadeva</h1>
            <h1 class="desc">Software Development Team</h1>
            <p class="jobdesc">Front-End | Back-End | Network Engineer | UI/UX Designer </p>
            </div>
            </section> -->
      <!-- End Header -->

      <!-- About Title -->
      <section id="about3" class="about3">
        <div class="containerB">
          <div class="project">
            <h1>About Our Project</h1>
          </div>
          <!-- End About Title -->

          <!-- About Background -->
          <div class="card-group bg-black">
            <div class="card bg-black text-white">
              <img src="img/gbr6.jpg" class="card-img" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Natuna.</h5>
                <p class="card-text">
                  Natuna adalah sebuah kepulauan yang terletak diujung utara
                  negara Indonesia, sebuah pulau yang menyimpan berjuta-juta
                  keindahan alam yang masih terjaga. Perairan sekitar Pulau
                  Natuna merupakan tempat bagi keanekaragaman hayati laut yang
                  luar biasa. Terumbu karang yang indah dan warna-warni menjadi
                  rumah bagi berbagai jenis ikan, terumbu karang, dan makhluk
                  laut lainnya.
                </p>
              </div>
            </div>
            <div class="card bg-black text-white">
              <img src="img/gbr4.jpg" class="card-img" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Surga Tersembunyi.</h5>
                <p class="card-text">
                  Keindahan alamnya sangat jarang diketahui oleh wisatawan,
                  selain keindahannya Natunya juga menyimpan keramahan dan
                  kehangatan. Wisata kuliner di Kepulauan Natuna adalah surga
                  yang tersembunyi bagi wisatawan beragam jenis olahan ikan ada
                  di Natuna, mengingat Natuna adalah daerah yang dikelilingi
                  oleh lautan sehingga aneka ragam seafood sangat mudah
                  dijumpai.
                </p>
              </div>
            </div>
            <div class="card bg-black text-white">
              <img src="img/gbr7.jpg" class="card-img" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Titik Sulit.</h5>
                <p class="card-text">
                  Dibalik semua keindahan pasti ada sebuah titik yang menjadi
                  sebuah penghambat, dikarenakan daerahnya yang terpencil akses
                  menuju Pulau Natuna sedikit terbatas, tidak banyak travel
                  agent dan pilihan akomodasi disana, para wisatawan akan
                  kesulitan menentukan pilihan dan kebingungan untuk mencari
                  destinasi wisata di Kepulauan Natuna dikarenakan tidak banyak
                  media yang mempromosikan Kepulauan Natuna.
                </p>
              </div>
            </div>
          </div>
          <!-- About Project Ending -->

          <div class="profile">
            <h1>Team Profile</h1>
          </div>
          <div class="card-container">
            <div class="slide-container">
              <div class="slide-content">
                <div class="card-wrapper">
                  <div class="kartu">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img src="img/al.jpg" alt="" class="kartu-image" />
                      </div>
                    </div>

                    <div class="card-cont">
                      <h2 class="nama">Alfath Rizanatul Ikhsan</h2>
                      <p class="deskripsi fath">
                        Project Manager | Manager muda berusia 20 tahun yang
                        sedang melaksanakan sekolah program sarjana S1 di
                        Universitas Islam Indonesia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slide-content">
                <div class="card-wrapper">
                  <div class="kartu">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img
                          src="img/1687630241199.jpg "
                          alt=""
                          class="kartu-image"
                        />
                      </div>
                    </div>

                    <div class="card-cont">
                      <h2 class="nama">Pandu Nur Afi Dewanto</h2>
                      <p class="deskripsi pandu">
                        Front-End Developer | Developer muda yang memiliki
                        kompetensi di bidang front-end, yang juga merupakan
                        seorang musisi, saat ini sedang melaksanakan program
                        sarjana S1 di Universitas Islam Indonesia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slide-content">
                <div class="card-wrapper">
                  <div class="kartu">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img
                          src="img/IMG_0891.jpg"
                          alt=""
                          class="kartu-image"
                        />
                      </div>
                    </div>

                    <div class="card-cont">
                      <h2 class="nama">Rakeen Arie Alireza</h2>
                      <p class="deskripsi raken">
                        Back-End Developer | Seorang developer muda spesialis
                        database asal Yogyakarta dan sedang melaksanakan program
                        sarjana S1 di Universitas Islam Indonesia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slide-content">
                <div class="card-wrapper">
                  <div class="kartu">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img src="img/bi.jpg" alt="" class="kartu-image" />
                      </div>
                    </div>

                    <div class="card-cont">
                      <h2 class="nama">M. Khalil Halabi</h2>
                      <p class="deskripsi abi">
                        Network Engineer | Mahasiswa Informatika spesialis
                        networking sekaligus ketua angkatan yang sedang
                        melaksanakan sekolah program sarjana S1 di Universitas
                        Islam Indonesia
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </container>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Js fath -->
    <script src="js/destination.js"></script>
    <!--  -->

    <!-- JS -->
    <script src="js/aboutUs.js"></script>
  </body>
</html>
