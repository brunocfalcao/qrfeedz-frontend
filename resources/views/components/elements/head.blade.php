<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    @vite('resources/css/app.css')
    <title>{{ $questionnaire->name }}</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
    </style>
{{ $slot }}
</head>
