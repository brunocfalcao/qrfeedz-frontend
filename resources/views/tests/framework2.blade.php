<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, viewport-fit=cover"
    />
    <title>Example 5</title>
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
      /* Set the height of the content to the full viewport height minus the height of the red border */
      .content {
        height: calc(100% - 2rem);
      }
      /* Make the font size of the "Hello, world!" text responsive to the viewport width */
      @media screen and (max-width: 768px) {
        .text-4xl {
          font-size: 2rem;
        }
      }
    </style>
  </head>
  <body class="flex justify-center items-center border-4 border-red-500">
    <div class="content bg-red-500 rounded-lg p-8 w-full sm:w-auto">
      <h1 class="text-white text-center text-4xl sm:text-5xl">
        Hello, world!
      </h1>
    </div>
  </body>
</html>
