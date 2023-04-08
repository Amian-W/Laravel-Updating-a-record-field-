<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="antialiased">
    <div>
        <a href="{{route('items.index')}}">Items</a>
        <br>
        <a href="{{route('items.editStock')}}">editStock</a>
    </div>
    <div class="max-w-7xl mx-auto p-3 lg:p-4">
        <div class="flex justify-center">
            
            <div>
                
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
