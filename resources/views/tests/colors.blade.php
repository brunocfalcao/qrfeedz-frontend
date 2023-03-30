@php
    use QRFeedz\Services\ThemeColor;
    $color = ThemeColor::make('0066cc');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>My Fullscreen Mobile App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Remove margin and padding from the body */
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
@php

    $color = Color::make('#0060AE');

    // The original color.
    $color->original;

    // The complementary color.
    $color->complementary;

    // The darkest color.
    $color->darken(50);

@endphp
<body class="bg-white">
    <div class="h-screen w-screen flex flex-col justify-center items-center">
        <div class="grid grid-cols-4 gap-4">
            <div class="p-6 bg-[{{ $color->header('background') }}] text-[{{ $color->header('primary') }}]">->Header Example</div>
            <div class=" p-6 bg-[{{ $color->darken(50) }}] text-[{{ $color->complementary }}]">02</div>
            <div class="bg-red-300 p-6">03</div>
            <div class="bg-red-400 p-6">04</div>
            <div class="bg-red-500 p-6">05</div>
            <div class="bg-red-600 p-6">06</div>
            <div class="bg-red-700 p-6">07</div>
            <div class="bg-red-800 p-6">08</div>
            <div class="bg-red-900 p-6">09</div>
        </div>
    </div>
</body>
</html>
