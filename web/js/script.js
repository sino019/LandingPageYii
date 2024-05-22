document.addEventListener("DOMContentLoaded", function () {
  const sr = ScrollReveal({
    reset: false, // This will make the animation reset when scrolling
  });

  sr.reveal(".navbar", {
    duration: 500,
    origin: "top",
    distance: "50px",
    interval: 5,
  });

  sr.reveal(".navbar-nav .nav-item", {
    duration: 500,
    origin: "bottom",
    distance: "20px",
    interval: 5,
  });
});

window.addEventListener("load", function () {
  if (
    window.performance &&
    window.performance.navigation.type ===
      window.performance.navigation.TYPE_RELOAD
  ) {
    window.location.href = "/site/index";
  }
});
