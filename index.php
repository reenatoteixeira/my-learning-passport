<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="./assets/css/output.css">
  <title>My Learning Passport</title>
</head>

<body class="min-h-screen relative bg-slate-900">
  <header id="header" class="bg-white w-full fixed top-0 z-10 md:rounded-none">
    <nav class="mx-auto max-w-7xl py-2 px-4 sm:px-6 lg:px-8 md:flex">
      <div class="w-full flex items-center justify-between md:w-max md:mr-6">
        <a href="/">
          <span class="sr-only">My Learning Passport</span>
          <img src="./assets/svg/logo.svg" alt="My Learning Passport logo" class="h-14 w-14">
        </a>

        <button id="mobile-menu-toggle" class="text-gray-500 hover:text-sky-500 md:hidden">
          <i id="mobile-menu--open" class="uil uil-bars text-3xl"></i>
          <i id="mobile-menu--close" class="hidden uil uil-times text-3xl"></i>
        </button>
      </div>

      <div id="nav-menu" class="hidden pb-3 text-xl md:flex md:text-base md:items-center md:justify-between md:w-full md:pb-0">
        <div>
          <hr class="border-solid my-3 md:hidden">
          <ul class="space-y-2 md:flex md:space-y-0 md:gap-4">
            <li>
              <a href="/" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-sky-500 md:w-max">
                Home
              </a>
            </li>

            <li>
              <a href="/about" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-sky-500 md:w-max">
                About Us
              </a>
            </li>

            <li>
              <a href="/contact" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-sky-500 md:w-max">
                Contact
              </a>
            </li>
          </ul>
        </div>


        <div class="md:relative md:inline-block">
          <hr class="border-solid my-3 md:hidden">
          <button id="login-menu-toggle" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-sky-500 md:w-max">
            <span>Log in</span>
            <i id="login-menu--open" class="uil uil-angle-down"></i>
            <i id="login-menu--close" class="hidden uil uil-angle-up"></i>
          </button>

          <div id="login-menu" class="hidden md:inline-block md:opacity-0 md:absolute md:bg-white md:min-w-max md:overflow-hidden md:rounded-lg md:shadow-lg md:ring-1 md:ring-gray-900/5 md:transition-opacity md:right-0 2xl:left-0">
            <ul class="space-y-2 mt-3 text-lg md:text-base md:mt-0 md:pl-2 md:pr-6 md:py-1 md:space-y-0">
              <li>
                <a href="/student" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-sky-500">
                  I'm a student
                </a>
              </li>
              <li>
                <a href="/teacher" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-sky-500">
                  I'm a teacher
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <script src="./assets/js/script.js"></script>
</body>

</html>