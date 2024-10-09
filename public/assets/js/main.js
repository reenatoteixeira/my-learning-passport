const HEADER_MENU = document.getElementById('header'),
  NAV_MENU = document.getElementById('nav-menu'),
  MOBILE_MENU_TOGGLE = document.getElementById('mobile-menu-toggle'),
  MOBILE_MENU_OPEN = document.getElementById('mobile-menu--open'),
  MOBILE_MENU_CLOSE = document.getElementById('mobile-menu--close'),
  LOGIN_MENU_TOGGLE = document.getElementById('login-menu-toggle'),
  LOGIN_MENU_OPEN = document.getElementById('login-menu--open'),
  LOGIN_MENU_CLOSE = document.getElementById('login-menu--close'),
  LOGIN_MENU = document.getElementById('login-menu');

MOBILE_MENU_TOGGLE.addEventListener('click', () => {
  MOBILE_MENU_OPEN.classList.toggle('hidden');
  MOBILE_MENU_CLOSE.classList.toggle('hidden');
  NAV_MENU.classList.toggle('hidden');
  HEADER_MENU.classList.toggle('rounded-b-lg');
  HEADER_MENU.classList.toggle('shadow-md');
});

LOGIN_MENU_TOGGLE.addEventListener('click', () => {
  LOGIN_MENU_TOGGLE.classList.toggle('text-sky-500');
  LOGIN_MENU_OPEN.classList.toggle('hidden');
  LOGIN_MENU_CLOSE.classList.toggle('hidden');
  LOGIN_MENU.classList.toggle('hidden');
  LOGIN_MENU.classList.toggle('sm:opacity-100');
});