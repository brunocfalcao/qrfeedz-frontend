<x-qrfeedz::components.elements.html>

    <x-qrfeedz::components.elements.head title="Okay!" :questionnaire="$questionnaire">

        @env('local')
        <style>
            .phpdebugbar {
                opacity: 0.5;
            }
        </style>
        @endenv

    </x-qrfeedz::components.elements.head>

    <x-qrfeedz::components.elements.body>

        @env('local')
            <div id="app" class="absolute text-sm">
                <resolution-display></resolution-display>
            </div>
        @endenv

        @foreach($questionnaire->pageInstances as $pageInstance)

            <x-dynamic-component :component="'qrfeedz-frontend::' . $pageInstance->view_component">

                @foreach($pageInstance->questionInstances as $questionInstance)

                @endforeach

            </x-dynamic-component>

        @endforeach

    </x-qrfeedz::components.elements.body>

</x-qrfeedz::components.elements.html>
