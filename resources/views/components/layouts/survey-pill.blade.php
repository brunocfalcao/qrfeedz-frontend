<x-qrfeedz::site>

    <x-qrfeedz::head>
        <title>McDonalds Survey</title>
        @vite('resources/css/app.css')
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        </style>
    </x-qrfeedz::head>

    <x-qrfeedz::body class="bg-white p-4 flex flex-col h-screen">

        <div class="flex flex-col h-full">

            <div class="h-48 w-full bg-indigo-500 rounded-t-4xl p-4">a</div>
            <div class="grow text-3xl w-full bg-indigo-300 p-4 space-y-12 overflow-auto block">

                <div class="space-y-4">
                    <p>How do you rate this town hall?</p>
                    <textarea class="w-full rounded-xl p-4"></textarea>
                </div>

                <div class="space-y-4">
                    <p>How do you rate this the speakers?</p>
                    <textarea class="w-full rounded-xl p-4"></textarea>
                </div>

                <div class="space-y-4">
                    <p>How do you rate this the speakers?</p>
                    <textarea class="w-full rounded-xl p-4"></textarea>
                </div>

                <div class="space-y-4">
                    <p>How do you rate this the speakers?</p>
                    <textarea class="w-full rounded-xl p-4"></textarea>
                </div>

                <div class="space-y-4">
                    <p>How do you rate this the speakers?</p>
                    <textarea class="w-full rounded-xl p-4"></textarea>
                </div>
            </div>

            <div class="w-full bg-indigo-200 rounded-b-4xl p-4">c</div>

        </div>

        @vite('resources/js/app.js')
    </x-qrfeedz::body>

</x-qrfeedz::site>
