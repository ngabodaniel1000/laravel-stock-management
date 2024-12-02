<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to XY Shop</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">

    <div class="container text-center px-6 py-10 md:py-20 lg:py-32">
        <!-- Welcome Header -->
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">
            Welcome to XY Shop
        </h1>
        
        <p class="text-lg md:text-xl lg:text-2xl text-gray-400 max-w-2xl mx-auto mb-10">
            Located in Kigali City, Kicukiro District, XY Shop specializes in high-quality shoes and clothes.
            Our secure stock management system ensures better control and accessibility, giving you accurate
            and up-to-date stock information and reports.
        </p>

        <!-- Login and Register Links -->
        <div class="flex justify-center space-x-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" 
                       class="px-6 py-3 text-lg font-semibold text-white bg-gray-700 rounded-lg hover:bg-gray-800 transition duration-300">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                       class="px-6 py-3 text-lg font-semibold text-white bg-gray-700 rounded-lg hover:bg-gray-800 transition duration-300">
                        Login
                    </a>
                    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="px-6 py-3 text-lg font-semibold text-white bg-gray-700 rounded-lg hover:bg-gray-800 transition duration-300">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</body>
</html>
