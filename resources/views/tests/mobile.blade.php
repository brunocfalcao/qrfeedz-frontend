<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mobile Template</title>
    <style>
        body, html {
            margin: 0;
        }
    </style>
</head>
<body class="flex flex-col bg-white">
    <header class="bg-blue-500 flex-none w-full rounded-t-[2rem]" style="height: 15%;">
        <div class="text-center text-white font-bold py-2 flex items-center justify-center h-full">
            Header
        </div>
    </header>
    <main class="bg-green-500 flex-grow w-full overflow-y-auto rounded-t-[2rem] mt-[-2rem]">
        <div class="text-center text-white font-bold py-2 flex items-center justify-center h-full">
            Content
        </div>
    </main>
    <footer class="bg-red-500 flex-none w-full rounded-b-[2rem]" style="height: 7%;">
        <div class="text-center text-white font-bold py-1 flex items-center justify-center h-full">
            Footer
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setBodyHeight();
            $(window).on('resize', setBodyHeight);

            function setBodyHeight() {
                const visibleHeight = window.innerHeight;
                const safeAreaInsets = getSafeAreaInsets();
                $('body').height(visibleHeight + safeAreaInsets.bottom);
            }

            function getSafeAreaInsets() {
                return {
                    top: parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--safe-area-inset-top')) || 0,
                    bottom: parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--safe-area-inset-bottom')) || 0
                };
            }

            // Set safe area insets for mobile devices
            const isIOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
            const isStandalone = 'standalone' in window.navigator && window.navigator.standalone;
            const safeAreaInsetBottom = 'env(safe-area-inset-bottom)';

            if (isIOS && isStandalone || !isIOS) {
                document.documentElement.style.setProperty('--safe-area-inset-bottom', safeAreaInsetBottom);
            }
        });
    </script>
</body>
</html>
