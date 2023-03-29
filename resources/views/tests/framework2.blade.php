<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Version 3</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Add some padding to the bottom of the body to avoid overlap with the bottom toolbar */
        body {
            padding-bottom: env(safe-area-inset-bottom);
        }
    </style>
  </head>
  <body class="flex justify-center items-center h-screen border-4 border-red-500">
    <div class="bg-red-500 rounded-lg p-8">
    <h1 class="text-white text-center text-4xl">Hello, world!</h1>
    </div>
  </body>
  </html>
