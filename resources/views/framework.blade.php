@php
    // Obtain the questionnaire that is in session (added by the controller).
    $survey = Cerebrus::get('questionnaire');
@endphp
<x-qrfeedz::layout.site>

    <x-qrfeedz::html.head>
        <title>{{ $survey->title }}</title>
        @vite('resources/css/app.css')
    </x-qrfeedz::html.head>

    <x-qrfeedz::html.body>

        <x-qrfeedz::layout.container>

            @foreach($survey->pages as $page)
                {{-- Each page is a dynamic component --}}
                <x-dynamic-component :component="$page->targetViewComponent()" />
            @endforeach

        </x-qrfeedz::layout.container>

        @vite('resources/js/app.js')
    </x-qrfeedz::html.body>
</x-qrfeedz::layout.site>
