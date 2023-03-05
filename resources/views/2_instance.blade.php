<x-qrfeedz::site>

    <x-qrfeedz::head>
        <title>McDonalds Survey</title>
        @vite('resources/css/app.css')
    </x-qrfeedz::head>

    <x-qrfeedz::body class="bg-gradient-to-br from-pink-500 via-red-500 to-yellow-500">
        <div class="mx-auto">
            <x-qr-widget::welcome-header></x-qr-widget::welcome-header>
            <x-qr-widget::welcome-page></x-qr-widget::welcome-page>
        </div>
        <!-- fixed footer -->
        <div class="absolute inset-x-0 bottom-0 z-10 w-full bg-[#db1020] h-16 flex items-center justify-center gap-12 h-20 p-4">
            <p class="text-white font-bold">McDonalds is honored to have your feedback. Thank you!</p>
        </div>
        <!--
            <button type="button" class="text-[#db1020] bg-white font-medium rounded-lg text-sm px-5 py-2.5 justify-center inline-flex items-center w-32">
                <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                Previous
            </button>
            <button type="button" class="text-[#db1020] bg-white font-medium rounded-lg text-sm px-5 py-2.5 justify-center inline-flex items-center w-32">
                Next
                <div class="w-5 h-5 ml-2">
                    <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </button>
        -->
        <!-- /fixed footer -->
        @vite('resources/js/app.js')
    </x-qrfeedz::body>

</x-qrfeedz::site>
