<x-qrfeedz::elements.html>

    <x-qrfeedz::elements.head>
    </x-qrfeedz::elements.head>

    <x-qrfeedz::elements.body>

        @env('local')
            <div id="app" class="absolute text-sm">
                <resolution-display></resolution-display>
            </div>
        @endenv

        {{--
            ** Questionnaire rendering logic **

            Each questionnaire is composed of pages. Each page, is then
            composed of questions, and each question can have widget(s).

            A questionnaire can also have 2 pre-pages (lets say):

            - A splash screen page (kind of showing the logo for 5 secs)
            - A "select language" page (flag one liners to select)

            A page can be part of a group. If so, then all the pages will
            have a special attribute for that.

            The pages, or page groups, are stored in arrays. The main
            pages collection is called global[]. Here we will store the main
            sequence of pages (pre-pages, page for the survey, promo, social).

            In case a page has a group, then the array will be the name of the
            group. As example, if a page is part of the group "complain" then
            the variable will be called complain[].

            If there are pre-pages, they will be rendered and shown before the
            main survey page is shown.

        --}}

    </x-qrfeedz::elements.body>

</x-qrfeedz::elements.html>
