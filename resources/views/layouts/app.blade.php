<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Giant Book Supplier' }}</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <main class="container py-5 min-vh-100">
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
