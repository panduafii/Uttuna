//Swiper slider
var swiper = new Swiper (" .bg-slider-thumbs", {
    loop: true, 
    spaceBetween: 0, 
    slidesPerView: 0, 

 });

 document.addEventListener('DOMContentLoaded', function () {
    var mySwiper = new Swiper('.swiper', {
      // Konfigurasi lainnya...

  
      // Tambahkan opsi loop untuk membuat swiper menjadi infinite
      loop: true,


  
      // Tambahkan opsi autoplay untuk membuat swiper bergerak otomatis
      autoplay: {
        delay: 7000, // Ganti dengan delay yang diinginkan (dalam milidetik)
        disableOnInteraction: true, // Biarkan swiper tetap bergerak ketika pengguna berinteraksi
      },
      
  
      // Tambahkan opsi speed untuk membuat transisi lebih smooth
      speed: 100, // Ganti dengan nilai yang diinginkan (dalam milidetik)
    });
  
    // Mungkin Anda memiliki kode lain di sini...
  });

  
  
  
var swiper2 = new Swiper(" .bg-slider", {
    loop: true,
    spaceBetween: 0,

    thumbs: {
        swiper: swiper,
    },
});


//Navigation bar effects on scroll
window.addEventListener("scroll", function(){
    const header = this.document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);

});

//scroll effect
document.addEventListener('scroll', function() {
    // Menentukan nilai batas scroll untuk mengaktifkan efek
    var scrollPosition = window.scrollY;
    var activationPoint = 100; // Ganti dengan nilai batas yang diinginkan

    // Memilih elemen dengan class scroll-effect
    var header = document.querySelector('.scroll-effect');

    // Menambahkan atau menghapus kelas 'active' berdasarkan scroll position
    if (scrollPosition > activationPoint) {
        header.classList.add('active');
    } else {
        header.classList.remove('active');
    }
});




//Responsive navigation menu toggle
const menuBtn = document.querySelector(".nav-menu-btn");
const closeBtn = document.querySelector(".nav-close-btn");
const navigation = document.querySelector(".navigation");


menuBtn.addEventListener("click", () =>{
    navigation.classList.add("active");
});

closeBtn.addEventListener("click", () =>{
    navigation.classList.remove("active");
});