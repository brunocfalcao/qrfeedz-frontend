  <!-- Header -->
  <header class="bg-blue-500 border-4 border-teal-500 h-96 flex items-center justify-center">
    <!-- Logo / name -->

    <!-- /Logo / name -->

    <!-- Language selection -->

    <!-- /Language selection -->
  </header>
  <!-- Content Area -->
  <div name="content-area" class="-mt-7 border-2 rounded-t-4xl border-pink-500 w-full flex flex-col flex-grow bg-gray-500 overflow-y-scroll">
    {{ $slot }}
  </div>
  <!-- Footer -->
  <footer class="bg-blue-500 h-64 flex items-center justify-center gap-8">
    <button name="slide-previous" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Slide previous
    </button>

    <button name="slide-next" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Slide next
    </button>
  </footer>
