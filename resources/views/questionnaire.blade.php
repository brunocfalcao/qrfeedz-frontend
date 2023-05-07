<x-qrfeedz::elements.html>

    <x-qrfeedz::elements.head title="Okay!">
    </x-qrfeedz::elements.head>

    <x-qrfeedz::elements.body>

        @env('local')
            <div id="app" class="absolute text-sm">
                <resolution-display></resolution-display>
            </div>
        @endenv

        Hello {{ $questionnaire->name }}!

        {{--
            ** Questionnaire rendering logic **

            Each questionnaire is composed of pages. Each page, is then
            composed of questions, and each question can have widget(s).

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



    </x-qrfeedz::elements.body>

</x-qrfeedz::elements.html>
