<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite(['resources/css/app.css']) --}}
</head>
<body class="bg-gray-100 text-gray-800 antialiased">
    <div class="max-w-4xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold text-center mb-8">@yield('title')</h1>
        @yield('content')
    </div>
</body>
</html>
