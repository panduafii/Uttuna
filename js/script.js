const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");

registerLink.addEventListener("click", () => {
  wrapper.classList.add("active");
});

<<<<<<< HEAD
loginLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});
=======
loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});


// Responsive navigation menu toggle
const menuBtn = document.querySelector(".nav-menu-btn");
const closeBtn = document.querySelector(".nav-close-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
  navigation.classList.add("active");
});

closeBtn.addEventListener("click", () => {
  navigation.classList.remove("active");
});
>>>>>>> e98491ff6a26eb1fbc69d8909f6e8f3fd9e98bd6
