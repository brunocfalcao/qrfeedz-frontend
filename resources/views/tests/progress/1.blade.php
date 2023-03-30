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
            padding: 0;
            height: 100%;
        }
    </style>
    <style>
      .my-div {
        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><path d='M0,50 A50,50 0 0,1 100,50 L100,50 L0,50 Z' fill='rgb(239, 68, 68)' /></svg>");
        background-repeat: no-repeat;
        background-size: cover;
        color: red;
      }
    </style>
</head>
<body class="flex flex-col bg-white mx-3 my-3 overflow-y-hidden">
    <header class="bg-blue-500 flex-none w-full rounded-t-[2rem] h-40">
        <div class="text-center text-white font-bold py-2 flex items-center justify-center h-full">
            Header
        </div>
    </header>
    <main class="bg-green-500 flex-grow w-full overflow-y-auto rounded-t-[2rem] mt-[-2rem]">
        <div class="text-center text-white font-bold py-2 flex items-center justify-center h-full px-5">
            Content
        </div>
    </main>
    <footer class="bg-red-500 flex-none w-full rounded-b-[2rem] mb-6 h-14">
        <div class="text-center text-white font-bold py-1 flex items-center justify-between h-full px-[15%]">
            <div class="-mt-12 flex flex-col items-center justify-center">
                <div class="w-16 text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 50">
                      <path d="M50,0 A50,50 0 0,1 100,50 L0,50 A50,50 0 0,1 50,0 Z" fill="currentColor" />
                    </svg>
                </div>
                <div class="w-10 h-10 -mt-5 rounded-full bg-white mx-auto flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-red-500 w-7 h-7">
                      <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                      <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                    </svg>
                </div>
                <p class="text-xs">home</p>
            </div>
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