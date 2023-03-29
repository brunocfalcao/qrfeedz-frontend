<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>CrocRock Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<style>
    /* Remove margin and padding from the body */
    body {
        margin: 0;
        padding: 0;
    }
    /* Set up a CSS Grid container to accommodate the safe area insets */
    .safe-area-container {
        display: grid;
        grid-template-rows: min(calc(100vh - env(safe-area-inset-top) - env(safe-area-inset-bottom)), 100%);
        width: 100%;
        height: 100%;
    }
    .safe-area-content {
        grid-row: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
</head>
<body class="bg-white">
    <div class="safe-area-container">
        <div class="h-screen w-screen flex flex-col justify-center items-center border-4 border-red-500 safe-area-content">
            <h1 class="text-3xl font-bold text-gray-700 mb-4">My Questionnaire</h1>
            <p class="text-lg text-gray-500">Welcome to my app!</p>
        </div>
    </div>
    <script>
        // For iOS devices, hide the Safari browser and footer
        if (window.navigator.standalone === true) {
            document.documentElement.style.setProperty('--safe-area-inset-bottom', 'env(safe-area-inset-bottom)');
        } else {
            // Show a toast message if the app is not running as a standalone app
            Toastify({
                text: "Add it to the home screen",
                duration: 5000,
                newWindow: true,
                close: true,
                gravity: "bottom",
                position: "left",
                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                stopOnFocus: true,
            }).showToast();
        }
    </script>
</body>
</html>
