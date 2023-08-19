  <!-- Header -->
  <header class="bg-blue-500 h-15 flex items-center justify-center">
    <h1 class="text-white text-2xl">Header</h1>
  </header>
  <!-- Content Area -->
  <div class="content-area flex-grow bg-gray-100 overflow-y-scroll">
    <div class="w-full py-8 px-4 text-center">
        {{ $slot }}
    </div>
  </div>
  <!-- Footer -->
  <footer class="bg-blue-500 h-10 flex items-center justify-center">
    <p class="text-white">Footer</p>
  </footer>
