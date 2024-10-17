<?php
require basePath('views/partials/head.php');
?>
  
  <main class="min-h-screen bg-slate-900 px-4 sm:px-6 lg:px-8">
    <section class="flex flex-col justify-center items-center h-screen">
      <div class="w-full max-w-xl mb-4 sm:mx-auto">
        <a href="/" class="text-white hover:text-gray-300">
          🡰 Back to home
        </a>
      </div>
      
      <div class="w-full max-w-xl bg-white p-4 shadow-lg rounded-xl sm:mx-auto">
        <form action="" method="post">
          <div class="mb-4">
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">
              First name
            </label>
            <input type="text" name="first-name" id="first-name" maxlength="255" placeholder="John" class="block
          w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300
          placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:leading-6">
            
            <p class="text-red-500 text-xs font-semibold">
              <?= $errors['first-name'] ?? '' ?>
            </p>
          
          </div>
          
          <div class="mb-4">
            <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">
              Last name
            </label>
            <input type="text" name="last-name" id="last-name" maxlength="255" placeholder="Doe" class="block
          w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300
          placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:leading-6">
            
            <p class="text-red-500 text-xs font-semibold">
              <?= $errors['last-name'] ?? '' ?>
            </p>
          
          </div>
          
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
              Email
            </label>
            <input type="email" name="email" id="email" maxlength="255" placeholder="johndoe@example.com"
                   class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset
                 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:leading-6">
            
            <p class="text-red-500 text-xs font-semibold">
              <?= $errors['email'] ?? '' ?>
            </p>
          </div>
          
          <div class="mb-4">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">
              Password
            </label>
            <input type="password" name="password" id="password" placeholder="*********" required class="block
          w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300
          placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:leading-6">
            
            <p class="text-red-500 text-xs font-semibold">
              <?= $errors['password'] ?? '' ?>
            </p>
            
            <ul class="text-gray-400 text-xs mt-1">
              <li>- At least 6 characters</li>
              <li>- At least 1 uppercase letter</li>
              <li>- At least 1 lowercase letter</li>
              <li>- At least 1 number</li>
            </ul>
          
          </div>
          
          <div class="mb-4">
            <label for="password-check" class="block text-sm font-medium leading-6 text-gray-900">
              Verify password
            </label>
            <input type="password" name="password-check" id="password-check" placeholder="*********" required class="block
          w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300
          placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:leading-6">
            
            <p class="text-red-500 text-xs font-semibold">
              <?= $errors['password-check'] ?? '' ?>
            </p>
          </div>
          
          
          <hr class="my-4 max-w-96 mx-auto">
          
          <div class="mb-4">
            <button type="submit" class="flex w-full justify-center rounded-md bg-sky-500 px-3 py-1.5 text-sm
          font-semibold leading-6 text-white shadow-sm hover:bg-sky-400 focus-visible:outline focus-visible:outline-2
           focus-visible:outline-offset-2 focus-visible:outline-sky-500">
              Register
            </button>
          </div>
          
          <div>
            <p class="text-center text-sm text-gray-500">
              Already have an account? <a href="/teacher/login" class="font-semibold leading-6 text-sky-500
            hover:text-sky-400">
                Login here
              </a>
            </p>
          </div>
        </form>
      </div>
    </section>
  </main>

<?php
require basePath('views/partials/footer.php');
?>