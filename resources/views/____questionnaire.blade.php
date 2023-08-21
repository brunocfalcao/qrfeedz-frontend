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

        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>

        @env('local')
            <div id="app" class="absolute text-sm">
                <resolution-display></resolution-display>
            </div>
        @endenv

        {{--
            For now we always use the same header-content-footer container,
            and inside each container there will be the page instances
            collection. The option to fork the page
        --}}
        <x-qrfeedz::containers.header-and-footer>

            {{-- Swiper instantiation --}}
            <div class="swiper main-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    @foreach($questionnaire->pageInstances as $pageInstance)

                    {{-- The first page index is shown, but  --}}
                    <div name="page-instance" class="swiper-slide bg-red-300 p-2" id="page-instance-{{ $pageInstance->uuid }}" page-instance-index={{ $pageInstance->index }}>
                        <x-dynamic-component :component="'qrfeedz-frontend::' . $pageInstance->view_component" :questionnaire="$questionnaire" :page-instance="$pageInstance" />
                    </div>

                    @endforeach
                </div>
            </div>

        </x-qrfeedz::containers.header-and-footer>

    </x-qrfeedz::elements.body>

</x-qrfeedz::elements.html>
