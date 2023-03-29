<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, viewport-fit=cover"
    />
    <title>Hello World</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      /* Add some padding to the bottom of the body to avoid overlap with the bottom toolbar */
      body {
        padding-bottom: env(safe-area-inset-bottom);
      }
      /* Set the height of the body to the full viewport height */
      html,
      body {
        height: 100%;
      }
      /* Set the height of the content to the full viewport height minus the height of the header and footer */
      .content {
        height: calc(100% - 5rem);
      }
    </style>
  </head>
  <body class="flex flex-col justify-between bg-gray-100">
    <!-- Header -->
    <header class="bg-green-500 h-16 flex justify-center items-center">
      <h1 class="text-white text-2xl">Header</h1>
    </header>
    <!-- Content -->
    <div class="content bg-blue-500 p-8">
      <h1 class="text-center text-4xl mb-8">Hello, world!</h1>
      <p class="text-lg">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam blandit
        ante at ante blandit, eget commodo dolor elementum. Fusce viverra
        tellus eu ante efficitur malesuada. Pellentesque id purus in justo
        venenatis elementum. Donec id convallis nibh. Integer sagittis turpis
        eget bibendum convallis. Sed in est libero.
      </p>
    </div>
    <!-- Footer -->
    <footer class="bg-yellow-500 h-16 flex justify-center items-center">
      <h1 class="text-white text-2xl">Footer</h1>
    </footer>
  </body>
</html>
