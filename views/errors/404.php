<?php
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/nav.php';
?>
  
  <main class="min-h-screen px-4 sm:px-6 lg:px-8">
    <section class="flex flex-col justify-center pb-28 items-center h-screen">
      <p class="text-base font-semibold text-sky-500">
        404 </p>
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">
        Page not found </h1>
      <p class="mt-6 text-base leading-7 text-gray-600 px-8">
        Sorry, we couldn’t find the page you’re looking for. </p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="/" class="rounded-md bg-sky-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-sky-400
      focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500">
          Go back home </a>
      </div>
    </section>
  </main>

<?php
require __DIR__ . '/../partials/footer.php';
?>