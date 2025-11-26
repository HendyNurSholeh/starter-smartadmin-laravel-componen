<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My App' }}</title>

    <!-- Laravel Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Tailwind CSS CDN (untuk development cepat) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- NAVBAR -->
    <x-navbar />

    <!-- MAIN CONTENT -->
    <div class="container mx-auto p-4 mt-6">
        {{ $slot }}
    </div>

    <!-- FOOTER -->
    <footer class="bg-white shadow mt-12 py-6">
        <div class="container mx-auto text-center text-gray-600">
            &copy; {{ date('Y') }} MyApp. All rights reserved.
        </div>
    </footer>

</body>
</html>
