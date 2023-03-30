<x-qrfeedz::layout.site>

    <x-qrfeedz::layout.head>
        @vite('resources/css/app.css')
    </x-qrfeedz::layout.head>

    <x-qrfeedz::layout.body>

        <x-qrfeedz::layout.container>

            @foreach($questionnaire->pages as $page)

                {{-- Each page is a dynamic component --}}
                <x-dynamic-component
                    :questionnaire="$questionnaire"
                    :component="$page->targetViewComponent()"/>

            @endforeach

        </x-qrfeedz::layout.container>

        @vite('resources/js/app.js')
    </x-qrfeedz::layout.body>
</x-qrfeedz::layout.site>
