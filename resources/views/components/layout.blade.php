<!DOCTYPE html class="h-full bg-gray-100">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="resource/css/app.css">
</head>

<body class="h-full">
    <div class="min-h-screen">
        <!-- navbar -->
        <x-Navbar></x-Navbar>

        <!-- header -->
        <!-- <x-Header></x-Header> -->

        <main>
            <div class="flex h-full w-full mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
