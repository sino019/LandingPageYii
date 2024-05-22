document.addEventListener("DOMContentLoaded", function () {
  ScrollReveal().reveal(".navbar", {
    duration: 1000,
    origin: "top",
    distance: "50px",
  });
  ScrollReveal().reveal(".navbar-nav .nav-item", {
    duration: 1000,
    origin: "bottom",
    distance: "20px",
    interval: 200,
  });
});
