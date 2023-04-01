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
    <!-- header section -->
    <header class="bg-[#FFBC0d] flex-none w-full rounded-t-[2rem] h-40">
        <div class="text-center text-white font-bold py-2 flex items-center justify-center h-full">

            <!-- header content section -->
            <div class="-mt-[2.5rem] text-center">
                <div class="w-24 mx-auto">
                    <!-- logo -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-40.605 -59.125 351.91 354.75"><path d="M194.5 16.8c23.3 0 42.2 98.3 42.2 219.7h34C270.7 105.8 236.4 0 194.4 0c-24 0-45.2 31.7-59.2 81.5C121.2 31.7 100 0 76.2 0 34.2 0 0 105.7 0 236.4h34C34 115 52.7 16.8 76 16.8s42.2 90.8 42.2 202.8H152c0-112 19-202.8 42.3-202.8" fill="currentColor"/></svg>
                    <!-- /logo -->
                </div>
                <p class="text-white">McDonalds Kaiseraugst</p>
            </div>
            <!-- /header content section -->

        </div>
    </header>
    <!-- /header section -->
    <!-- content section -->
    <main class="bg-white flex-grow w-full overflow-y-auto border-[#FFBC0d] rounded-t-[2rem] mt-[-2rem]">
        <!-- content main area -->
        <div class="text-center py-2 flex flex-col items-center justify-center h-full px-5 border-4 border-[#FFBC0d]">

            <p class="text-xl font-bold py-12">Thank for your interest in providing us your feedback!</p>

            <button class="w-4/5 h-[5rem] bg-[#FFBC0d] rounded-r-[2rem] rounded-tl-[2rem] flex justify-between items-center">
                <div class="px-3">
                    <div class="h-14 w-14 rounded-tl-full rounded-r-full bg-white text-[#FFBC0d] flex items-center justify-center">
                        <svg class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_101_295)">
                        <path d="M11.4811 0C11.5789 0.0234788 11.6807 0.0508707 11.7785 0.0743494C12.8898 0.352182 13.6842 1.30699 13.7077 2.45353C13.7312 3.59225 13.7155 4.73097 13.7155 5.86969C13.7155 5.90882 13.7077 5.94404 13.6999 6.00274C13.6177 6.00274 13.5433 6.00274 13.4651 6.00274C11.8372 6.00665 10.2133 5.991 8.5854 6.01839C6.93015 6.04578 5.36881 7.46625 5.16142 9.10976C5.09881 9.5989 5.11837 10.0959 5.10272 10.5889C5.09881 10.6711 5.10272 10.7533 5.10272 10.8668C4.75054 10.765 4.59401 11.0115 4.40618 11.1994C3.94443 11.6572 3.48268 12.115 3.02876 12.5807C2.83311 12.7803 2.61397 12.8742 2.34396 12.7764C2.0857 12.6825 1.96048 12.4711 1.95656 12.1385C1.95265 11.7355 1.95265 11.3324 1.96048 10.9294C1.96439 10.8159 1.92135 10.7728 1.8196 10.7376C0.872628 10.4363 0.293485 9.79065 0.0586969 8.82802C0.0352182 8.7341 0.0195656 8.64019 0 8.54627C0 6.4371 0 4.32792 0 2.21874C0.0117394 2.19527 0.0273919 2.1757 0.031305 2.15222C0.246527 1.04089 0.911759 0.348268 2.00744 0.0586969C2.08178 0.0391313 2.15222 0.0195656 2.22657 0C5.31012 0 8.39757 0 11.4811 0Z" fill="#FFBC0D"/>
                        <path d="M13.1324 7.17668C14.5451 7.17668 15.9577 7.17277 17.3704 7.17668C18.9082 7.1806 19.9961 8.28019 20 9.81413C20 11.3716 20.0039 12.9251 20 14.4825C20 14.9169 20.0196 15.359 19.9648 15.7895C19.8395 16.8265 19.2565 17.5269 18.2821 17.8869C18.1021 17.9534 18.0239 18.02 18.0356 18.2234C18.0552 18.5874 18.0395 18.9513 18.0434 19.3152C18.0434 19.6048 17.9456 19.8435 17.6638 19.957C17.386 20.0704 17.163 19.957 16.9634 19.7535C16.443 19.2252 15.9108 18.7048 15.3942 18.1765C15.2925 18.0747 15.1908 18.0395 15.0538 18.0395C13.0111 18.0434 10.9685 18.0434 8.92192 18.0434C7.74798 18.0434 6.79709 17.3939 6.42926 16.3295C6.35099 16.1064 6.29621 15.8599 6.29621 15.6251C6.28447 13.6138 6.27273 11.6024 6.29621 9.59109C6.31186 8.31149 7.40754 7.2119 8.68713 7.18842C10.1702 7.16103 11.6533 7.1806 13.1364 7.1806C13.1324 7.1806 13.1324 7.1806 13.1324 7.17668ZM12.4398 13.1716C12.1189 12.8468 11.8176 12.5416 11.5124 12.2364C11.2424 11.9703 10.8863 11.9507 10.6437 12.1894C10.3972 12.432 10.405 12.7842 10.6789 13.0581C11.1133 13.4964 11.5515 13.9347 11.9898 14.369C12.2755 14.6508 12.6042 14.6586 12.8859 14.3768C13.7938 13.4729 14.7016 12.5651 15.6016 11.6572C15.8599 11.395 15.8638 11.0389 15.6212 10.8042C15.3786 10.5655 15.0342 10.5733 14.7681 10.8355C14.2359 11.3598 13.7077 11.892 13.1794 12.4203C12.9407 12.6668 12.6981 12.9133 12.4398 13.1716Z" fill="#FFBC0D"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_101_295">
                        <rect width="20" height="20" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                </div>
                <div class="">I want to give feedback</div>
                <div class=""></div>
            </button>

        </div>
        <!-- /content area -->
    </main>
    <!-- /content section-->
    <footer class="bg-[#FFBC0d] flex-none w-full rounded-b-[2rem] mb-6 h-14">
        <div class="text-white font-bold py-1 flex items-center justify-between h-full px-[15%]">
            <!-- Home footer link -->
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

            <!-- Survey footer link: -ml-10 to make it horizontally centered -->
            <div class="text-[#DBAA2B] -ml-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>
            </div>

            <!-- Promo/last information footer link -->
            <div class="text-[#DBAA2B]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M12 1.5c-1.921 0-3.816.111-5.68.327-1.497.174-2.57 1.46-2.57 2.93V21.75a.75.75 0 001.029.696l3.471-1.388 3.472 1.388a.75.75 0 00.556 0l3.472-1.388 3.471 1.388a.75.75 0 001.029-.696V4.757c0-1.47-1.073-2.756-2.57-2.93A49.255 49.255 0 0012 1.5zm3.53 7.28a.75.75 0 00-1.06-1.06l-6 6a.75.75 0 101.06 1.06l6-6zM8.625 9a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm5.625 3.375a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        // Wait for the DOM to be ready before executing the rest of the code
        $(document).ready(function() {
            // Initialize the body height and set up an event listener for the resize event
            setBodyHeight();
            $(window).on('resize', setBodyHeight);

            // Function to set the height of the body element
            function setBodyHeight() {
                // Get the visible height of the viewport
                const visibleHeight = window.innerHeight;

                // Get the safe area insets of the device
                const safeAreaInsets = getSafeAreaInsets();

                // Set the height of the body element to the sum of the visible height and the bottom safe area inset
                $('body').height(visibleHeight + safeAreaInsets.bottom);
            }

            // Function to get the safe area insets of the device
            function getSafeAreaInsets() {
                // Get the values of the --safe-area-inset-top and --safe-area-inset-bottom CSS variables on the root html element
                return {
                    top: parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--safe-area-inset-top')) || 0,
                    bottom: parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--safe-area-inset-bottom')) || 0
                };
            }

            // Set safe area insets for mobile devices
            // Check if the device is an iOS device
            const isIOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);

            // Check if the app is running in standalone mode on an iOS device
            const isStandalone = 'standalone' in window.navigator && window.navigator.standalone;

            // Get the value of the env(safe-area-inset-bottom) CSS value
            const safeAreaInsetBottom = 'env(safe-area-inset-bottom)';

            // If the device is an iOS device running in standalone mode, or if it is not an iOS device, set the --safe-area-inset-bottom CSS variable on the root html element to the value of env(safe-area-inset-bottom)
            if (isIOS && isStandalone || !isIOS) {
                document.documentElement.style.setProperty('--safe-area-inset-bottom', safeAreaInsetBottom);
            }
        });
    </script>
</body>
</html>
