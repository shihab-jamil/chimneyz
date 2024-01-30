<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <!-- Include the main CSS file -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-382e0ae7.css') }}">
    <!-- You might also want to include the fonts here -->
    <link rel="stylesheet" href="{{ asset('build/assets/materialdesignicons-webfont-662fefa8.woff2') }}">
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app">
    </div>
    <!-- Include the main JavaScript file -->
    <script type="module" src="{{ asset('build/assets/app-f5bf68d8.js') }}"></script>
</body>
</html>
