<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive TailwindCSS Layout</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .content-area {
      height: calc(100% - 25%);
    }
  </style>
</head>
<body class="flex flex-col h-screen overflow-hidden">
  <!-- Header -->
  <header class="bg-blue-500 h-15 flex items-center justify-center">
    <h1 class="text-white text-2xl">Header</h1>
  </header>
  <!-- Content Area -->
  <div class="content-area flex-grow bg-gray-100 overflow-y-scroll">
    <div class="w-full py-8 px-4 text-center">
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <p class="text-xl">Content Area</p>
      <!-- Add your content here -->
    </div>
  </div>
  <!-- Footer -->
  <footer class="bg-blue-500 h-10 flex items-center justify-center">
    <p class="text-white">Footer</p>
  </footer>
</body>
</html>
