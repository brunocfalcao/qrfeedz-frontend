<body {{ $attributes->merge(['class' => 'antialiased' . ($class ?? '')]) }}>
{{ $slot }}
@vite('resources/js/app.js')
</body>
