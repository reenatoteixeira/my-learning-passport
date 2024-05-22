const headerMenu = document.getElementById("header"),
  navMenu = document.getElementById("nav-menu"),
  mobileMenuToggle = document.getElementById("mobile-menu-toggle"),
  mobileMenuOpen = document.getElementById("mobile-menu--open"),
  mobileMenuClose = document.getElementById("mobile-menu--close"),
  loginMenuToggle = document.getElementById("login-menu-toggle"),
  loginMenuOpen = document.getElementById("login-menu--open"),
  loginMenuClose = document.getElementById("login-menu--close"),
  loginMenu = document.getElementById("login-menu");

mobileMenuToggle.addEventListener("click", () => {
  mobileMenuOpen.classList.toggle("hidden");
  mobileMenuClose.classList.toggle("hidden");
  navMenu.classList.toggle("hidden");
  headerMenu.classList.toggle("rounded-b-lg");
});

loginMenuToggle.addEventListener("click", () => {
  loginMenuOpen.classList.toggle("hidden");
  loginMenuClose.classList.toggle("hidden");
  loginMenu.classList.toggle("hidden");
});
