<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TradeFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
        }
    </style>
</head>
<body class="gradient-bg flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
        <h2 class="text-2xl font-bold text-gray-900 text-center mb-6">Login to TradeFlow</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="flex items-center justify-between mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="text-blue-600">
                    <span class="ml-2 text-gray-700">Remember Me</span>
                </label>
                <a href="#" class="text-blue-600 hover:underline text-sm">Forgot Password?</a>
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition">Login</button>
        </form>
        <p class="mt-4 text-center text-gray-700">Don't have an account? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register here</a></p>
    </div>
</body>
</html>
