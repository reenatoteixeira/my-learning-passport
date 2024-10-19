<?php
require basePath('views/partials/head.php');
?>
  
  <main class="min-h-screen bg-slate-900 px-4 sm:px-6 lg:px-8">
    <section class="flex flex-col justify-center pb-28 items-center h-screen">
      <div class="w-full max-w-xl mb-4 sm:mx-auto">
        <a href="/" class="text-white hover:text-gray-300">
          🡰 Back to home
        </a>
      </div>
      
      <div class="w-full max-w-xl bg-white p-4 shadow-lg rounded-xl sm:mx-auto">
        <form action="" method="post">
          <div class="mb-4">
            <label for="access-code" class="block text-sm font-medium leading-6 text-gray-900">
              Access code
            </label>
            <input type="text" name="access-code" id="access-code" maxlength="25" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset
                 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:leading-6">
          </div>
          
          <hr class="my-4 max-w-96 mx-auto">
          
          <div class="mb-4">
            <button type="submit" class="flex w-full justify-center rounded-md bg-sky-500 px-3 py-1.5 text-sm
          font-semibold leading-6 text-white shadow-sm hover:bg-sky-400 focus-visible:outline focus-visible:outline-2
           focus-visible:outline-offset-2 focus-visible:outline-sky-500">
              Sign in
            </button>
          </div>
          
          <div>
            <p class="text-center text-sm text-gray-500">
              Don't have an access code? <a href="/" class="font-semibold leading-6 text-sky-500
            hover:text-sky-400">
                Click here
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