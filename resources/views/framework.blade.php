<x-qrfeedz::site>

    <x-qrfeedz::head>
        <title>{{ $questionnaire->title }}</title>
        @vite('resources/css/app.css')
    </x-qrfeedz::head>

    <x-qrfeedz::body>

        <x-qrfeedz::container   :questionnaire="$questionnaire" :color="$color">
            <x-qrfeedz::header  :questionnaire="$questionnaire" :color="$color"></x-qrfeedz::header>
            <x-qrfeedz::content :questionnaire="$questionnaire" :color="$color"></x-qrfeedz::content>
            <x-qrfeedz::footer  :questionnaire="$questionnaire" :color="$color"></x-qrfeedz::footer>
        </x-qrfeedz::container>

        @vite('resources/js/app.js')
    </x-qrfeedz::body>
</x-qrfeedz::site>
