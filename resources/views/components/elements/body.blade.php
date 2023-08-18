<body {{ $attributes->merge(['class' => 'antialiased']) }}>
    {{ $slot }}
    @vite('resources/js/app.js')
</body>
