<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>My Fullscreen Mobile App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Remove margin and padding from the body */
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body class="bg-white">
    <div class="h-screen w-screen flex flex-col justify-center items-center">
        <h1 class="text-3xl font-bold text-gray-700 mb-4">My Fullscreen Mobile App</h1>
        <p class="text-lg text-gray-500">Welcome to my app!</p>
    </div>
    <script>
        // For iOS devices, hide the Safari browser and footer
        if (window.navigator.standalone === true) {
            document.documentElement.style.setProperty('--safe-area-inset-bottom', 'env(safe-area-inset-bottom)');
        } else {
            // Show an alert message if the app is not running as a standalone app
            alert('If you bookmark it to open from the Home Screen you get a better user experience');
        }
    </script>
</body>
</html>
