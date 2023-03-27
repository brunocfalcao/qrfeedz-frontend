<x-qrfeedz::site>

    <x-qrfeedz::head>
        <title>McDonalds Survey</title>
        @vite('resources/css/app.css')
    </x-qrfeedz::head>

    <x-qrfeedz::body xyz="fade-100% duration-20 origin-bottom">

        <x-qrfeedz::container :questionnaire="$questionnaire">
            <x-qrfeedz::header></x-qrfeedz::header>
            <x-qrfeedz::content></x-qrfeedz::content>
            <x-qrfeedz::footer></x-qrfeedz::footer>
        </x-qrfeedz::container>

        @vite('resources/js/app.js')
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <script type="module">
            $(document).ready(function() {
                var swiper = new Swiper(".swiper", {
                    allowTouchMove: false
                });

                $("#btn-next").click(function(){
                    swiper.slideNext(1000);
                })

                $("#btn-previous").click(function(){
                    swiper.slidePrev(1000);
                })
            });
        </script>
    </x-qrfeedz::body>
</x-qrfeedz::site>
