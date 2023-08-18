<x-qrfeedz::elements.html>

    <x-qrfeedz::elements.head title="Okay!" :questionnaire="$questionnaire">

        @env('local')
        <style>
            .phpdebugbar {
                opacity: 0.5;
            }
        </style>
        @endenv

    </x-qrfeedz::elements.head>

    <x-qrfeedz::elements.body class="flex flex-col h-screen overflow-hidden">

        @env('local')
            <div id="app" class="absolute text-sm">
                <resolution-display></resolution-display>
            </div>
        @endenv

        <x-qrfeedz::containers.header-and-footer :questionnaire="$questionnaire">

            komeke!

        </x-qrfeedz::containers.header-and-footer>

    </x-qrfeedz::elements.body>

</x-qrfeedz::elements.html>
