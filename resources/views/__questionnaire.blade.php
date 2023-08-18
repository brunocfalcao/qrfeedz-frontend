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

        Hello {{ $questionnaire->name }}!

        {{--
            ** Questionnaire rendering logic **

            Each questionnaire is composed of pages. Each page, is then
            composed of questions, and each question instance can have
            widget(s).

            Each widget can also have logic. Can have a value, or can
            just be viewable. Can also have a conditional, meaning if
            the value has a condition then something else happens. For
            instance, slides down a textarea for more information.

            Each page decides what should happen and when. For instance
            if the page has an animation (like the splash screen) it will
            call the "nextSlide()" after the animation is finished. Also
            in case it's a survey page, then it's up to the visitor to
            move to the next page, or if all the questions are answered
            then it will automatically pass to the next page.

            Pages can be part of a group. If that's the case the slider
            will slide over the group of pages. When the page group is
            over, it will pass to the next page on the global page array.

            The pages, or page groups, are stored in arrays. The main
            pages collection is called global[]. Here we will store the main
            sequence of pages (pre-pages, page for the survey, promo, social).

            In case a page has a group, then the array will be the name of the
            group. As example, if a page is part of the group "complain" then
            the variable will be called complain[].
        --}}

        {{--
            First step is render all the pages, hidden. The pages are rendered
            in the order of the questionnaire page type index (N-N table).

            Each page will be hidden, then later we will activate the pages
            and compute the sliders between the pages and page groups.

            Each page placeholder will render the respective view component
            of the questionnaire page type instance or its view component
            override.

            We also need to understand that some page instances they are
            full screen, while others will be rendered inside the normal
            header-content-footer structure. This is given by the page type
            instance mode (table page_types.fullscreen=true/false).
        --}}

        @foreach($questionnaire->pageInstances as $pageInstance)

            {{--
                The page will be rendered in full screen. There will be no
                header and footer, and the view component will just be
                rendered inside this main view component template.
            --}}

            <x-dynamic-component :component="'qrfeedz-frontend::' . $pageInstance->view_component">

                {{--
                    Inside the page view component, we will need to render whatever comes from the
                    instance page view question_instances. One by one, questions index ordered.
                --}}

            </x-dynamic-component>

        @endforeach

    </x-qrfeedz::components.elements.body>

</x-qrfeedz::components.elements.html>
