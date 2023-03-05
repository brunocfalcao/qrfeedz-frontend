<x-qrfeedz::site>

    <x-qrfeedz::head>
        <title>McDonalds Survey</title>
        @vite('resources/css/app.css')
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        </style>
    </x-qrfeedz::head>

    <x-qrfeedz::body class="bg-white mx-auto">

        <div class="bg-white h-4"></div>

        <div class="bg-[#db1020] flex flex-col rounded-t-4xl">

            <div class="h-1/4 flex flex-col items-center justify-center">
                <img class="h-48" src="{{ Vite::asset('public/storage/images/mcd.svg') }}">
                <div class="flex gap-12 text-white text-sm tracking-wide underline underline-offset-2">
                <a>English</a>
                <a>French</a>
                <a>German</a>
                <a>Italian</a>
                </div>
            </div>
            <div class="mx-4 h-3/4 bg-white rounded-t-4xl drop-shadow-md h-max">1234</div>

        </div>




        @vite('resources/js/app.js')
    </x-qrfeedz::body>

</x-qrfeedz::site>
