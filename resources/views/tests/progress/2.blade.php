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
            <svg width="81" height="18" viewBox="0 0 81 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 18V18C7.66561 18 15.0111 14.858 20.315 9.3235V9.3235C31.4413 -2.28657 50.0289 -2.31763 61.1553 9.29244L61.5431 9.69713C66.626 15.001 73.6538 18 81 18V18H0Z" fill="#FFBC0D"/>
            </svg>
        </div>
    </main>
    <footer class="bg-[#FFBC0d] flex-none w-full rounded-b-[2rem] mb-6 h-14">
        <div class="text-white font-bold py-1 flex items-center justify-between h-full px-[15%]">
            <div class="-mt-6 flex flex-col items-center justify-center">
                <div class="w-20">
                    <svg viewBox="0 0 81 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 18V18C7.66561 18 15.0111 14.858 20.315 9.3235V9.3235C31.4413 -2.28657 50.0289 -2.31763 61.1553 9.29244L61.5431 9.69713C66.626 15.001 73.6538 18 81 18V18H0Z" fill="#FFBC0D"/>
                    </svg>
                </div>
                <div class="-mt-2 w-10 h-10 rounded-full bg-white mx-auto flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-[#FFBC0D] w-7 h-7">
                      <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                      <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                    </svg>
                </div>
                <p class="text-xs">Home</p>
            </div>

            <div class="text-white -ml-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M12 1.5c-1.921 0-3.816.111-5.68.327-1.497.174-2.57 1.46-2.57 2.93V21.75a.75.75 0 001.029.696l3.471-1.388 3.472 1.388a.75.75 0 00.556 0l3.472-1.388 3.471 1.388a.75.75 0 001.029-.696V4.757c0-1.47-1.073-2.756-2.57-2.93A49.255 49.255 0 0012 1.5zm3.53 7.28a.75.75 0 00-1.06-1.06l-6 6a.75.75 0 101.06 1.06l6-6zM8.625 9a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm5.625 3.375a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z" clip-rule="evenodd" />
                </svg>
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
