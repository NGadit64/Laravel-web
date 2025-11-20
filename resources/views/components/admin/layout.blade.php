<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-100">
    <div class="flex min-h-screen">
        <x-admin.sidebar />

        <div class="flex-1 flex flex-col">
            <x-admin.navbar />

            <main class="p-6 space-y-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
