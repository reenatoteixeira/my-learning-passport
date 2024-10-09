<?php require_once '../Core/functions.php'?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="shortcut icon" href="assets/svg/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>My Learning Passport</title>
</head>

<body class="min-h-screen relative">
  <header id="header" class="bg-white w-full fixed top-0 sm:rounded-none">
    <nav class="container mx-auto py-2 px-4 sm:flex">
      <div class="w-full flex items-center justify-between sm:w-max sm:mr-6">
        <a href="/">
          <span class="sr-only">My Learning Passport</span>
          <img src="assets/svg/logo.svg" alt="My Learning Passport's logo." class="size-14">
        </a>
        
        <button id="mobile-menu-toggle" class="text-gray-500 hover:text-sky-500 sm:hidden">
          <i id="mobile-menu--open" class="uil uil-bars text-3xl"></i>
          <i id="mobile-menu--close" class="hidden uil uil-times text-3xl"></i>
        </button>
      </div>
      
      <div id="nav-menu" class="hidden pb-3 text-xl sm:flex sm:text-base sm:items-center sm:justify-between sm:w-full
       sm:pb-0">
        <div>
          <hr class="border-solid my-3 sm:hidden">
          <ul class="space-y-2 sm:flex sm:space-y-0 sm:gap-4">
            <li>
              <a href="/" class="<?= isActive('/') ? "text-sky-500" : "text-gray-500" ?> flex p-2 rounded-lg
            font-semibold leading-6 hover:text-sky-500 sm:w-max">
                Home
              </a>
            </li>
            <li>
              <a href="/about" class="<?= isActive('/about') ? "text-sky-500" : "text-gray-500" ?> flex p-2
            rounded-lg font-semibold leading-6 hover:text-sky-500 sm:w-max">
                About
              </a>
            </li>
            <li>
              <a href="/contact" class="<?= isActive('/contact') ? "text-sky-500" : "text-gray-500" ?> flex p-2
            rounded-lg font-semibold leading-6 hover:text-sky-500 sm:w-max">
                Contact
              </a>
            </li>
          </ul>
        </div>
        
        <div class="sm:relative sm:inline-block">
          <hr class="border-solid my-3 sm:hidden">
          <button id="login-menu-toggle" class="flex justify-between w-full p-2 rounded-lg font-semibold leading-6
          text-gray-500 hover:text-sky-500 sm:w-max">
            <span>Sign in</span>
            <i id="login-menu--open" class="uil uil-angle-down"></i>
            <i id="login-menu--close" class="hidden uil uil-angle-up"></i>
          </button>
          
          <div id="login-menu" class="hidden sm:opacity-0 sm:absolute sm:bg-white sm:min-w-max
          sm:overflow-hidden sm:rounded-lg sm:shadow-lg sm:ring-1 sm:ring-gray-900/5 sm:transition-opacity sm:right-0
           2xl:left-0bre">
            <ul class="space-y-2 mt-3 text-lg sm:text-base sm:mt-0 sm:pl-2 sm:pr-6 sm:py-1 sm:space-y-0">
              <li>
                <a href="/student/login" class="flex p-2 rounded-lg font-semibold leading-6 text-gray-500
                hover:text-sky-500">
                  I'm a student
                </a>
              </li>
              <li>
                <a href="/teacher/login" class="flex p-2 rounded-lg font-semibold leading-6 text-gray-500
                hover:text-sky-500">
                  I'm a teacher
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  
  <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <section class="flex flex-col justify-center items-center h-screen text-center">
      <p class="text-base font-semibold text-sky-500">Hey! Nice to see you here.</p>
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Home page is under construction</h1>
      <p class="mt-6 text-base leading-7 text-gray-600 px-8">Stay tuned to future updates!</p>
    </section>
  </main>
  
  <footer class="absolute bottom-0 w-full h-14 flex items-center justify-center">
    <div class="text-center text-slate-400">
      <p>My Learning Passport&copy; <?= date("Y") ?>, Renato Teixeira</p>
    </div>
  </footer>
  
  <script src="assets/js/main.js"></script>
</body>

</html>