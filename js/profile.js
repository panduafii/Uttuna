document.addEventListener("DOMContentLoaded", function () {
    const showPopupBtn = document.getElementById("showPopupBtn");
    const closePopupBtn = document.getElementById("closePopupBtn");
    const myPopup = document.getElementById("myPopup");
    const overlay = document.getElementById("overlay");
  
    showPopupBtn.addEventListener("click", function () {
      myPopup.style.display = "block";
      overlay.style.display = "block";
    });
  
    closePopupBtn.addEventListener("click", function () {
      myPopup.style.display = "none";
      overlay.style.display = "none";
    });
  
    overlay.addEventListener("click", function () {
      myPopup.style.display = "none";
      overlay.style.display = "none";
    });
  });
  
  window.addEventListener("scroll", function () {
    const header = this.document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });
  
  //Responsive navigation menu toggle
  const menuBtn = document.querySelector(".nav-menu-btn");
  const closeBtn = document.querySelector(".nav-close-btn");
  const navigation = document.querySelector(".navigation");
  
  menuBtn.addEventListener("click", () => {
    navigation.classList.add("active");
  });
  
  closeBtn.addEventListener("click", () => {
    navigation.classList.remove("active");
  });
  