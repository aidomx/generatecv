<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>@yield('title', 'GenerateCV')</title>
    @vite('resources/css/app.css')
</head>
<body class="text-gray-800 bg-gray-100">
    <div class="flex flex-col min-h-screen">

        {{-- Header --}}
        <header class="p-4 bg-white shadow">
            <h1 class="text-xl font-bold">GenerateCV</h1>
        </header>

        {{-- Konten utama --}}
        <main class="container flex-1 p-6 mx-auto">
            @yield('content')
        </main>

        {{-- Footer --}}
        <footer class="p-4 text-center bg-gray-200">
            <p class="text-sm">&copy; {{ date('Y') }} GenerateCV</p>
        </footer>
    </div>
</body>
</html>


