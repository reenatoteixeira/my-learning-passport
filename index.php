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
  <header id="header" class="bg-white w-full fixed top-0 z-10">
    <nav class="mx-auto max-w-7xl py-2 px-4 sm:px-6 lg:px-8">
      <div class="w-full flex items-center justify-between">
        <a href="/">
          <span class="sr-only">My Learning Passport</span>
          <img src="./assets/svg/logo.svg" alt="My Learning Passport logo" class="h-14 w-14">
        </a>

        <button id="mobile-menu-toggle" class="text-gray-500 hover:text-sky-500">
          <i id="mobile-menu--open" class="uil uil-bars text-3xl"></i>
          <i id="mobile-menu--close" class="hidden uil uil-times text-3xl"></i>
        </button>
      </div>

      <div id="nav-menu" class="hidden pb-3 text-xl">
        <div>
          <hr class="border-solid my-3">
          <ul class="space-y-2">
            <li>
              <a href="/" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-sky-500">
                Home
              </a>
            </li>

            <li>
              <a href="/about" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-sky-500">
                About Us
              </a>
            </li>

            <li>
              <a href="/contact" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-sky-500">
                Contact
              </a>
            </li>
          </ul>
        </div>


        <div>
          <hr class="border-solid my-3">
          <button id="login-menu-toggle" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-sky-500">
            <span>Log in</span>
            <i id="login-menu--open" class="uil uil-angle-down"></i>
            <i id="login-menu--close" class="hidden uil uil-angle-up"></i>
          </button>

          <div id="login-menu" class="hidden">
            <ul class="space-y-2 mt-3 text-lg">
              <li>
                <a href="/student" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-blue-500">
                  I'm a student
                </a>
              </li>
              <li>
                <a href="/teacher" class="flex items-center justify-between w-full p-2 rounded-lg font-semibold leading-6 text-gray-500 hover:text-blue-500">
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