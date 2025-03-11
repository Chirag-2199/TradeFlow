<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeFlow - Page Not Found</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white">

    <!-- Header -->
    <header class="bg-[#23297f] text-white py-4 px-6 shadow-xl">
        <div class="flex items-center justify-between max-w-7xl mx-auto">
            <div class="flex items-center space-x-12">
                <img src="{{ asset('images/logo1.png') }}" alt="TradeFlow Logo" class="h-20 w-auto">
            </div>
            <a href="#" class="bg-white text-[#23297f] px-6 py-2 rounded-full font-semibold hover:bg-opacity-90 transition-all duration-300 shadow-lg">
                Go to Home
            </a>
        </div>
    </header>

    <!-- 404 Section -->
    <section class="flex flex-col items-center justify-center min-h-[80vh] text-center px-4">
        <h1 class="text-7xl font-bold text-[#23297f]">404</h1>
        <p class="text-2xl text-gray-700 mt-4">Oops! The page you are looking for does not exist.</p>
        <p class="text-lg text-gray-500 mt-2">It might have been moved or deleted.</p>
        <a href="#" class="mt-6 bg-[#23297f] text-white px-8 py-4 rounded-full text-lg font-semibold hover:scale-105 transition-transform duration-300 shadow-2xl">
            Back to Home
        </a>
    </section>

    <!-- Footer -->
    <footer class="bg-[#23297f] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-blue-200 text-sm">&copy; 2025 TradeFlow. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
