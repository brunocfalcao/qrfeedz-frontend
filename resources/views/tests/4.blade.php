<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mobile Template</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body class="flex flex-col h-screen">
    <header class="bg-blue-500 flex-none w-full" style="height: 15%;">
        <div class="text-center text-white font-bold py-2">
            Header
        </div>
    </header>
    <main class="bg-green-500 flex-grow w-full overflow-y-auto">
        <div class="text-center text-white font-bold py-2">
            Content
        </div>
        <!-- Add more content here to see the scrollable behavior -->
    </main>
    <footer class="bg-red-500 flex-none w-full" style="height: 5%;">
        <div class="text-center text-white font-bold py-1">
            Footer
        </div>
    </footer>
</body>
</html>