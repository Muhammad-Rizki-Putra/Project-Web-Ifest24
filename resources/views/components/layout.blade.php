<!DOCTYPE html class="h-full bg-gray-100">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pagename }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="resource/css/app.css">
    <script defer src="resource/js/app.js"></script>
</head>

<body id="{{$pagename}}" class="">
    <div class="">
        <!-- navbar -->
        <x-Navbar></x-Navbar>

        <!-- header -->
        <!-- <x-Header></x-Header> -->
        <main>
            <div class="w-full mx-auto ">
                {{ $slot }}
            </div>
        </main>

        <x-footer></x-footer>
    </div>
</body>

</html>
