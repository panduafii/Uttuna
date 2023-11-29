document.addEventListener("DOMContentLoaded", function () {
  let currentIndex = 0;
  const slideContainer = document.querySelector(".slide-container");

  function showSlide(index) {
    const percentage = -index * 25 + "%"; /* Adjust to the width of one slide */
    slideContainer.style.transform = "translateX(" + percentage + ")";
  }

  function nextSlide() {
    currentIndex =
      (currentIndex + 1) % 4; /* Set to the total number of slides */
    showSlide(currentIndex);
  }

  function prevSlide() {
    currentIndex =
      (currentIndex - 1 + 4) % 4; /* Set to the total number of slides */
    showSlide(currentIndex);
  }

  showSlide(currentIndex);

  document.querySelector(".next-button").addEventListener("click", nextSlide);
  document.querySelector(".prev-button").addEventListener("click", prevSlide);
});
