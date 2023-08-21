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

        .progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background-color: rgba(255, 255, 255, 0.5);
            z-index: 1000; /* Ensure it appears on top of other content */
        }

        .progress-bar {
            height: 100%;
            width: 0;
            background-color: #f00;
            transition: width 0.75s;
        }

        [name="presentation"] {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .swiper {
          width: 100%;
          height: 100%;
        }

        .swiper-slide {
          display: flex;
          justify-content: center;
          align-items: center;
        }
    </style>
{{ $slot }}
</head>
